<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }
    public function category()
    {
        return view('category');
    }

    public function single_category()
    {
        return view('single-category');
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
