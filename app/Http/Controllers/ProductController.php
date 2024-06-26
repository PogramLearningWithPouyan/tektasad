<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(StoreProductRequest $request)
    {
        Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Product added successfully.');
    }
}
