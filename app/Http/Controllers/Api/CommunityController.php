<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Community;

class CommunityController extends Controller
{
    public function index()
    {
        $communities = Community::all();
        return response()->json($communities);
    }

    public function show($id)
    {
        $community = Community::find($id);
        if (!$community) {
            return response()->json(['error' => 'Community not found'], 404);
        }
        return response()->json($community);
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

        return response()->json($community, 201);
    }

    public function update(Request $request, $id)
    {
        $community = Community::find($id);
        if (!$community) {
            return response()->json(['error' => 'Community not found'], 404);
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'tags' => 'sometimes|required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'sometimes|required|string',
        ]);

        $community->fill($request->all());

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('community_images', 'public');
            $community->image = $imagePath;
        }

        $community->save();

        return response()->json($community);
    }

    public function destroy($id)
    {
        $community = Community::find($id);
        if (!$community) {
            return response()->json(['error' => 'Community not found'], 404);
        }

        $community->delete();

        return response()->json(['message' => 'Community deleted successfully']);
    }
}