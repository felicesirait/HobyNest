<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;

class CommunityController extends Controller
{
    public function index()
    {
        // Mengambil semua komunitas dari database
        $communities = Community::all();

        // Mengirimkan data komunitas ke view
        return view('Community', compact('communities'));
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

        $community = new Community();
        $community->name = $request->name;
        $community->tags = $request->tags;
        $community->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('community_images', 'public');
            $community->image = $imagePath;
        }

        $community->save();

        return redirect()->route('community.index')->with('success', 'Community created successfully.');
    }

    public function show($id)
    {
        $community = Community::findOrFail($id);
        return view('Community', compact('community'));
    }

    public function forum($id)
    {
        $community = Community::findOrFail($id);
        return view('Forum', compact('community'));
    }
}