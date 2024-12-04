<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use App\Http\Controllers\Controller;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil semua komunitas dari database
        $communities = Community::all();

        // Mengirimkan data komunitas ke view
        if ($request->wantsJson()) {
            return response()->json($communities);
        } else {
            return view('Community', compact('communities'));
        }
    }

    public function create()
    {
        return view('Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'tags' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
        ]);

       $communities = new Community();
       $communities->name = $request->name;
       $communities->tags = $request->tags;
       $communities->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('community_images', 'public');
           $communities->image = $imagePath;
        }

       $communities->save();

        if ($request->wantsJson()) {
            return response()->json($community);
        } else {
            return redirect()->route('community.index')->with('success', 'Community created successfully.');
        }
    }

    public function show($id, Request $request)
    {
       $communities = Community::findOrFail($id);

        if ($request->wantsJson()) {
            $response = [
                'id' =>$communities->id,
                'name' =>$communities->name,
                'tags' =>$communities->tags,
                'description' =>$communities->description,
                'image' => asset('storage/' .$communities->image),
                'links' => [
                    [
                        'rel' => 'self',
                        'href' => route('community.show',$communities->id)
                    ],
                    [
                        'rel' => 'edit',
                        'href' => route('community.edit',$communities->id)
                    ],
                    [
                        'rel' => 'delete',
                        'href' => route('community.destroy',$communities->id)
                    ],
                    [
                        'rel' => 'forum',
                        'href' => route('community.forum',$communities->id)
                    ],
                    [
                        'rel' => 'join_community',
                        'href' => route('community.index')
                    ],
                    [
                        'rel' => 'create_community',
                        'href' => route('api.links.create')
                    ]
                ]
            ];
            return response()->json($response);
        } else {
            return view('Community', compact('community'));
        }
    }

    public function forum($id)
    {
       $communities = Community::findOrFail($id);
        return view('Forum', compact('communities'));
    }

    public function edit($id)
    {
       $communities = Community::findOrFail($id);
        return view('EditCommunity', compact('communities'));
    }

    public function destroy($id)
    {
       $communities = Community::findOrFail($id);
       $communities->delete();

        return redirect()->route('community.index')->with('success', 'Community deleted successfully.');
    }
}