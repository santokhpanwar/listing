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
            ]);
        $listing = new Listing();
        $listing->title = $request->title;
        $listing->body = $request->body;
        $listing->published_at = $request->published_at;

        $listing->save();
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
        $listing->title = $request->title;
        $listing->body = $request->body;
        $listing->published_at = $request->published_at;

        $listing->save();
        return redirect('/admin/listings')->with('success','listing updated successfully!');
    }

    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect('/admin/listings')->with('success','listing deleted successfully!');
    }
}