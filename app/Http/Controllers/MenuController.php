<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuType;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menutypes = MenuType::with('menus')->get();
        return view('admin.menu.menu-setting', compact('menutypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu, $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
    public function getMenu($id)
    {
        // dd($id);
        $menu = Menu::where('menu_type_id', $id)->get();
        return response($menu, 200);
    }
}
