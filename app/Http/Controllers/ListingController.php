<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::all();
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
            'toll_free_number' => 'required',
            'twitter_url' => 'required',
            'linkedin_url' => 'required',
            'instagram_url' => 'required'
            ]);
            
        $listing = new Listing();
        $listing->title = $request->title;
        $listing->body = $request->body;
<<<<<<< HEAD
        $listing->published_at = $request->published_at; 
=======
        $listing->category = $request->category;
        $listing->published_at = $request->published_at;

>>>>>>> 29a9bd554352b0511fa9ec5fc445536932103033
        $listing->save();

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('listing_images');
                $listing->images()->create(['image_path' => $imagePath]);
            }
        }

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