<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        // dd($request->hasFile('image'));
        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $testimonial->image = $fileName;
        }
        $testimonial->save();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return response($testimonial, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        // dd($request->hasFile('image'));
        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $testimonial->image = $fileName;
        }
        $testimonial->update();
        return redirect()->back()->with('success', 'Testimonial uploaded successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
