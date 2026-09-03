<?php

namespace App\Http\Controllers;

use App\models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductStoreRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
        $data = $request->validated();

        $product = Product::create($data);

        return $product;
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validated();

        $product->update($data);

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        // 204 No Content
        return response()->json([
            'message' => 'Produto excluido',
        ], 204);
    }
}
