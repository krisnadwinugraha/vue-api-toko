<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(5);
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->image->move(public_path('/images'), $imageName);

        $request['image'] = $imageName;
        $category = Category::create($request->post());
        return response()->json([
            'message'=>'Category Created Successfully!!',
            'category'=>$category
        ]);
    }

    public function show(Category $category)
    {
        return response()->json($category);
    }

    public function update(Request $request, Category $category)
    {
        if($request->file('image')){
            $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('/images'), $imageName);
            $request['image'] = $imageName;
        }
        
        $category->fill($request->post())->save();
        return response()->json([
            'message'=>'Category Updated Successfully!!',
            'category'=>$category
        ]);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            'message'=>'Category Deleted Successfully!!'
        ]);
    }
}
