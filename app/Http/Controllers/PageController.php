<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\SectionSetting;
use Illuminate\Http\Request;
use PDO;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();
        $section = [];
        foreach ($pages as $page) {
            // $section_id = implode(',', $page->section_setting_id);
            $section_array = explode(',', $page->section_setting_id);

            $section = SectionSetting::whereIn('id', $section_array)->pluck('name');
        }
        // dd($section);
        return view('admin.page.index', compact('pages', 'section'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections = SectionSetting::all();
        return view('admin.page.create', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $page = new Page();
        $page->name = $request->name;
        $section_id = implode(',', $request->section);
        $page->section_setting_id = $section_id;
        $page->save();
        return redirect()->back()->with('success', 'Pages uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return view('admin.page.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        $sections = SectionSetting::all();

        return view('admin.page.edit', compact('page', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        $page->name = $request->name;
        $section_id = implode(',', $request->section);
        // dd($section_id);
        $page->section_setting_id = $section_id;
        $page->update();
        return redirect()->back()->with('success', 'Pages uploaded successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
