<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function feminino()
    {
        $products = Product::where('category', 'feminino')->get();
        return view('feminino', compact('products'));
    }

    public function masculino()
    {
        $products = Product::where('category', 'masculino')->get();
        return view('masculino', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('detalhe-produto', compact('product'));
    }
}
