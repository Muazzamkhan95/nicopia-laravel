<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $slider = new Slider();
        $slider->name = $request->name;
        $slider->description = $request->description;
        $slider->heading1 = $request->heading1;
        $slider->url_name = $request->url_name;
        $slider->url = $request->url;
        $slider->url_name1 = $request->url_name1;
        $slider->url1 = $request->url1;
        $slider->slider_type = $request->slider_type;
        // dd($request->hasFile('image'));
        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $slider->image = $fileName;
        } else {
            $slider->image = 'null';
        }
        if (!empty(request()->file('videourl'))) {
            $destinationPath = 'storage/video';
            $extension = request()->file('videourl')->getClientOriginalExtension();
            $fileName = 'storage/video/' . rand() . '.' . $extension;
            request()->file('videourl')->move($destinationPath, $fileName);
            $slider->video_url = $fileName;
        }

        $slider->save();
        return redirect()->back()->with('success', 'Slider uploaded successfully.');

        // return redirect()->back()->with('error', 'No image file uploaded.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        return view('admin.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {

        return response($slider, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $slider->name = $request->name;
        $slider->description = $request->description;
        
        $slider->url_name = $request->url_name;
        $slider->url = $request->url;
        $slider->url_name1 = $request->url_name1;
        $slider->url1 = $request->url1;
        // dd($request->hasFile('image'));
        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $slider->image = $fileName;
            $slider->heading1 = $request->heading1;
        } else {
            $slider->image = 'null';
        }
        if (!empty(request()->file('videourl'))) {
            $slider->heading1 = '';
            $destinationPath = 'storage/video';
            $extension = request()->file('videourl')->getClientOriginalExtension();
            $fileName = 'storage/video/' . rand() . '.' . $extension;
            request()->file('videourl')->move($destinationPath, $fileName);
            $slider->video_url = $fileName;
        }
        $slider->update();
        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully.');
    }
}
