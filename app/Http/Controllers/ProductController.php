<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('name')->paginate(10);
        return response()->json($products);
    }

    public function store(CreateProductRequest $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }
    
    public function update(CreateProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return response()->json($product, 200);
    }
    
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json('Success', 200);
    }
}
