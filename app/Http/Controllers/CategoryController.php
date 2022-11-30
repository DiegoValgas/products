<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name')->paginate(10);
        return response()->json($categories);
    }

    public function store(CreateCategoryRequest $request)
    {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }
    
    public function update(CreateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return response()->json($category, 200);
    }
    
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json('Success', 200);
    }
}
