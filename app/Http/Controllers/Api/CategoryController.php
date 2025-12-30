<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategories()
    {
        return response()->json(Category::all());
    }

    public function getCategoryById($id)
{
    $category = Category::findOrFail($id);
    return response()->json($category);
}


    public function createCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $category = Category::create([
            'name' => $request->name
        ]);

        return response()->json($category, 201);
    }

    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->only('name'));

        return response()->json($category);
    }

        public function deleteCategory($id)
    {
        Category::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Kategori berhasil dihapus'
        ]);
    }

}
