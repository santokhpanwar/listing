<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;


class FaqController extends Controller
{
    public function index()
    {
        $faq = faq::all();
        return view('admin.faq.index', compact('faq'));
    }
    
    public function create()
    {
        return view('admin.faq.create');
    }
    public function store(Request $request)
    {   
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);  
        $faq = new Faq();
        $faq->title = $request->title;
        $faq->status = $request->status;
        $faq->body = $request->body;
    
        $faq->save();
        return redirect('/admin/faq')->with('success','faq created successfully!');
    }

    public function update(Faq $faq, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'status' => 'required'
            ]);
        // Update the item
        $faq->update([
            'name' => $request->input('name'),
            'body' => $request->input('body'),
            'status' => $request->input('status'),
            'published_at' => $request->input('published_at'),
            // Update other fields as needed
        ]);

        return redirect('/admin/faq')->with('success','listing updated successfully!');

        }

        public function show(Faq $faq)
        {
            return view('admin.faq.show', compact('faq'));
        }

        public function edit(Faq $faq)
        {
            return view('admin.faq.edit', compact('faq'));
        }

        public function destroy(Faq $faq)
        {
            $faq->delete();
            return redirect('/admin/faq')->with('success','faq deleted successfully!');
        }
}
