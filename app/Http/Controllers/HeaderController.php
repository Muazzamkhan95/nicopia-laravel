<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\MenuType;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = Header::find(1);
        $menu_type = MenuType::all();
        return view('admin.header.create', compact('header', 'menu_type'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Header $header)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $footer = Header::find($id);
        $footer->name  = $request->name;
        $footer->menu_type_id  = $request->menu_type_id;
        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $footer->image = $fileName;
        }
        // dd($request->all());

        $footer->update();
        return redirect()->route('headers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Header $header)
    {
        //
    }
}
