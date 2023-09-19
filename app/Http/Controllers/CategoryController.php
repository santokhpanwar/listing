<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
// use App\Http\Controllers\File;

class CategoryController extends Controller
{
    public function index()
    {
        $Categories = Categories::all();
        return view('admin.categories.index', compact('Categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {   $request->validate([
        'title' => 'required',
        'status' => 'required'
        ]);


        $categories = new Categories();
        $categories->title = $request->title;
        $categories->status = $request->status;
        // $categories->image = $request->image;
        // $categories->published_at = $request->published_at;

        $path = storage_path('public/images');
            
            $imagePath = $path.'/'.$request->image;
            $categories->image = $imagePath;

            echo "<pre>";
            print_r($request->all());
            echo "</pre>";
            // die();
         $categories->save();
        return redirect('/admin/categories')->with('success','Listing created successfully!');
    }

    public function edit(Categories $Categories)
    {
        return view('admin.categories.edit', compact('Categories'));
    }

    public function show(Categories $categories)
    {
        return view('admin.categories.show', compact('categories'));
    }
    public function destroy(Categories $categories)
    {
        $categories->delete();
        return redirect('/admin/categories')->with('success','categories deleted successfully!');
    }

}
