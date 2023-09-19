<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;


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


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'phone_number' => 'required',
            'weekday' => 'required',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'image' => 'required',
            'video_url' => 'required',
            'address' => 'required',
            'address2' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'estb_year' => 'required',
            'service' => 'required',
            'iso_certified' => 'required',
            'fax_number' => 'required',
            'toll_free_number' => 'required'
            ]);
            
        $listing = new Listing();
        $listing->title = $request->title;
        $listing->body = $request->body;
        $listing->category = implode(',',$request->category);
        $listing->phone_number = $request->phone_number;
        $listing->weekday = implode(',',$request->weekday);
        $listing->opening_time = $request->opening_time;
        $listing->closing_time = $request->closing_time;
        $listing->image = $request->image;
        $listing->video_url = $request->video_url;
        $listing->address = $request->address;
        $listing->address2 = $request->address2;
        $listing->country = $request->country;
        $listing->state = $request->state;
        $listing->city = $request->city;
        $listing->zip_code = $request->zip_code;
        $listing->estb_year = $request->estb_year;
        $listing->service = $request->service;
        $listing->iso_certified = $request->iso_certified;
        $listing->fax_number = $request->fax_number;
        $listing->toll_free_number = $request->toll_free_number;
        $listing->facebook_url = $request->facebook_url;
        $listing->twitter_url = $request->twitter_url;
        $listing->linkedin_url = $request->linkedin_url;
        $listing->instagram_url = $request->instagram_url;
        $listing->published_at = $request->published_at;
        $listing->status = $request->status;

        $listing->save();

        // Handle image uploads
        // if ($request->hasFile('images')) {
        //     foreach ($request->file('images') as $image) {
        //         $imagePath = $image->store('listing_images');
        //         $listing->images()->create(['image_path' => $imagePath]);
        //     }
        // }

        return redirect('/users/add-listing')->with('success','Listing created successfully!');
    }
}
