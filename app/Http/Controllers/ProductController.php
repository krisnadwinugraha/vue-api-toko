<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->image->move(public_path('/images'), $imageName);

        $request['image'] = $imageName;
        $product = Product::create($request->post());
        return response()->json([
            'message'=>'Product Created Successfully!!',
            'product'=>$product
        ]);
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }

    public function update(Request $request, Product $product)
    {
        if($request->file('image')){
            $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/images'), $imageName);
            $request['image'] = $imageName;
        }
        
        $product->fill($request->post())->save();
        return response()->json([
            'message'=>'Product Updated Successfully!!',
            'product'=>$product
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'message'=>'Product Deleted Successfully!!'
        ]);
    }
}
