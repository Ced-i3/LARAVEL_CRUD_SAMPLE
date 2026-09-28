<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'qty' => 'required|numeric',
        'price' => 'required|numeric',
        'description' => 'required',
    ]);

    $newProduct = Product::create($data);

    return redirect()->route('product.index')
        ->with('success', 'Product created successfully!');
}

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        $product->update($data);

        return redirect()->route('product.index')
            ->with('success', 'Product updated successfully!');
    }

}
