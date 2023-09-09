<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function edit()
    {
        return view('admin.categories.edit');
    }

    public function show()
    {
        return view('admin.categories.show');
    }

}
