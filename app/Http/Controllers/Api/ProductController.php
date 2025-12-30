<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // GET ALL
    public function getProducts()
    {
        return response()->json(
            Product::with('category')->get()
        );
    }

    // GET BY ID
    public function getProductById($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return response()->json($product);
    }

    // CREATE
    public function createProduct(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric',
            'stock'       => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id'
        ]);

        $product = Product::create([
            'name'        => $request->name,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'category_id' => $request->category_id
        ]);

        return response()->json($product, 201);
    }

    // UPDATE
    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric',
            'stock'       => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id'
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'name'        => $request->name,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'category_id' => $request->category_id
        ]);

        return response()->json($product);
    }

    // DELETE
    public function deleteProduct($id)
    {
        Product::destroy($id);

        return response()->json([
            'message' => 'Produk berhasil dihapus'
        ]);
    }
}
