<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::all();
        return view('admin.listing.index', compact('listings'));
    }

    public function create()
    {
        return view('admin.listing.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);
        $listing = new Listing();
        $listing->title = $request->title;
        $listing->body = $request->body;
        $listing->published_at = $request->published_at;

        $listing->save();
        return redirect('/admin/listing')->with('success','Listing created successfully!');
    }

    public function show(listing $listing)
    {
        return view('admin.listings.show', compact('listing'));
    }

    public function edit(listing $listing)
    {
        return view('admin.listings.edit', compact('listing'));
    }

    public function update(listing $listing, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);
        $listing->title = $request->title;
        $listing->body = $request->body;
        $listing->published_at = $request->published_at;

        $listing->save();
        return redirect('/admin/listing')->with('success','listing updated successfully!');
    }

    public function destroy(listing $listing)
    {
        $listing->delete();
        return redirect('/admin/listing')->with('success','listing deleted successfully!');
    }
}