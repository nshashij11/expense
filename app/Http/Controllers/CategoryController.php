<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;


class CategoryController extends Controller
{
    public function index(){    	
    	return Category::all()->toJson();
    }

    public function show($id){
    	return Category::find($id);
    }

    public function store(Request $request){
    	$category = Category::create($request->all());
    	return response()->json($category, 201);
    }

    public function update(Request $request, $id){
    	$category = Category::findOrFail($id);
    	$category->update($request->all());
    	return response()->json($category, 200);
    }

    public function delete($id){
    	$del = Category::findOrFail($id);
    	$del->delete();
    	return response()->json(null, 204);
    }
}
