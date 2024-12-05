<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_desc' => 'required|string',
            'community_name' => 'required|string|max:255',
        ]);

        $imagePath = $request->file('product_img')->store('product_images', 'public');

        

        return redirect()->route('marketplace', ['community_name' => $request->community_name])->with('success', 'Product created successfully.');
    }
}