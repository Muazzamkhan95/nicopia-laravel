<?php

namespace App\Http\Controllers;

use App\Models\PageSetting;
use App\Models\SectionSetting;
use Database\Seeders\SectionSeeder;
use Illuminate\Http\Request;

class SectionSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectionSettings = SectionSetting::all();
        return view('admin.section-setting.index', compact('sectionSettings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.section-setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $sectionSetting = new SectionSetting();
        $sectionSetting->name = $request->name;
        $sectionSetting->heading = $request->heading;
        $sectionSetting->paragraph = $request->paragraph;
        $sectionSetting->button = $request->button;
        $sectionSetting->url = $request->url;
if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $sectionSetting->image = $fileName;
        }
        $sectionSetting->save();

        return redirect()->route('section-settings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SectionSetting $sectionSetting)
    {
        return view('admin.section-settings.show', compact('sectionSetting'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SectionSetting $sectionSetting)
    {
        return response($sectionSetting, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SectionSetting $sectionSetting)
    {
        // dd($request->all());
        // $sectionSetting->name = $request->name;
        $sectionSetting->heading = $request->heading;
        $sectionSetting->paragraph = $request->paragraph;
        $sectionSetting->button = $request->button;
        $sectionSetting->url = $request->url;
        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $sectionSetting->image = $fileName;
        }
        

        $sectionSetting->update();

        return redirect()->route('section-settings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SectionSetting $sectionSetting)
    {
        $sectionSetting->delete();
        return redirect()->route('section-settings.index')->with('success', 'Section Settings deleted successfully.');
    }
}
