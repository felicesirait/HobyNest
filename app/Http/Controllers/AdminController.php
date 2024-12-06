<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Community;

class AdminController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $communityCount = Community::count();
        $users = User::all();
        return view('admin', compact('userCount', 'communityCount', 'users'));
    }

    public function showDeletePage()
    {
        $communities = Community::all();
        return view('AdminDelete', compact('communities'));
    }

    public function destroyCommunity($id)
    {
        $community = Community::findOrFail($id);
        $community->delete();
        return redirect()->route('admin.showDeletePage')->with('success', 'Community deleted successfully');
    }

}