<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class categoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index');
    }

    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
      
        $categories = new categories();
        $categories->title = $request->title;
        $categories->status = $request->status;
        $categories->published_at = $request->published_at;

        $categories->save();
        return redirect('/admin/categories')->with('success','Listing created successfully!');
    }

    public function edit()
    {
        return view('admin.categories.edit');
    }

    public function show()
    {
        return view('admin.categories.show');
    }

}
