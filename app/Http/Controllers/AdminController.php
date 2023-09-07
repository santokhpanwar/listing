<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.adminHome');
    }       
    public function dashboard()
    {
        return view('users/user-dashboard');
    }
    public function my_account()
    {
        return view('users/my-account');
    }

    public function my_listing()
    {
        return view('users/my-listing');
    }

    public function add_listing()
    {
        return view('users/add-listing');
    }
}
