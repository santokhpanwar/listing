<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::paginate(4);
        return view('admin.listings.index', compact('listings'));
    }

    public function create()
    {
        return view('admin.listings.create');
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

        return redirect('/admin/listings')->with('success','Listing created successfully!');
    }

    public function show(Listing $listing)
    {
        return view('admin.listings.show', compact('listing'));
    }

    public function edit(Listing $listing)
    {
        return view('admin.listings.edit', compact('listing'));
    }

    public function update(Listing $listing, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);
        // Update the item
        $listing->update([
            'name' => $request->input('name'),
            'body' => $request->input('body'),
            'published_at' => $request->input('published_at'),
            // Update other fields as needed
        ]);

    // Handle image uploads
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imagePath = $image->store('listing_images');
            $listing->images()->create(['image_path' => $imagePath]);
        }
    }
        return redirect('/admin/listings')->with('success','listing updated successfully!');
    }

    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect('/admin/listings')->with('success','listing deleted successfully!');
    }
}