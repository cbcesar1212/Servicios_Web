<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return ProductResource::collection($products);
    }

   
    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->validated());
        return new ProductResource($product);
    }


    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return new ProductResource($product);
    }

   
    public function update(UpdateProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->validated());
        return new ProductResource($product);
    }

    
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(null, 204);
    }
}
