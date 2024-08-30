<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footers = Footer::find(1);
        return view('admin.footer.create', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.footer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $footer = new Footer();
        $footer->about = $request->about;
        $footer->menu_heading = $request->menu_heading;
        $footer->contact_heading = $request->contact_heading;
        $footer->facebook = $request->facebook;
        $footer->google = $request->google;
        $footer->instagram  = $request->instagram;
        $footer->twitter  = $request->twitter;
        $footer->address  = $request->address;
        $footer->email  = $request->email;
        $footer->phone  = $request->phone;
        $footer->copyright  = $request->copyright;

        $footer->contact_description  = $request->contact_description;
        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $footer->image = $fileName;
        }
        // dd($request->all());

        $footer->save();
        return redirect()->route('footers.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer $footer)
    {
        // $footer = Footer
        // return view('admin.footer.create', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $footer = Footer::find($id);
        $footer->about = $request->about;
        $footer->menu_heading = $request->menu_heading;
        $footer->contact_heading = $request->contact_heading;
        $footer->facebook = $request->facebook;
        $footer->google = $request->google;
        $footer->instagram  = $request->instagram;
        $footer->twitter  = $request->twitter;
        $footer->address  = $request->address;
        $footer->email  = $request->email;
        $footer->phone  = $request->phone;
        $footer->copyright  = $request->copyright;
        $footer->contact_description  = $request->contact_description;
        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $footer->image = $fileName;
        }
        // dd($request->all());

        $footer->update();
        return redirect()->route('footers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
