<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $Categories = Categories::all();
        return view('home', compact('Categories'));
    }
    public function category()
    {   
        $Categories = Categories::all();
        return view('category', compact('Categories'));
    }

    public function single_category()
    {   
        $Categories = Categories::all();
        return view('single-category', compact('Categories'));
    } 

    public function search()
    {
        return view('search');
    } 
    public function about()
    {
        return view('about');
    } 
    public function contact()
    {
        return view('contact-us');
    } 
    public function faq()
    {
        return view('faq');
    } 
    
    public function advertise_with_us()
    {
        return view('advertise-with-us');
    } 
}
