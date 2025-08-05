<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all()->sortByDesc('id');
        return view('products.index', compact('products'));
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index');
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}