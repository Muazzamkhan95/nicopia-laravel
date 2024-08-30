<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->long_description = $request->long_description;
        // dd($request->hasFile('image'));
        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $service->image = $fileName;
        }
        if (!empty(request()->file('image1'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image1')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . rand() . '.' . $extension;
            request()->file('image1')->move($destinationPath, $fileName);
            $service->image1 = $fileName;
        }
        $service->save();
        return redirect()->back()->with('success', 'Service uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->name = $request->name;
        $service->description = $request->description;
        $service->long_description = $request->long_description;
        // dd($request->hasFile('image'));

        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $service->image = $fileName;
        }
        if (!empty(request()->file('image1'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image1')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . rand() . '.' . $extension;
            request()->file('image1')->move($destinationPath, $fileName);
            $service->image1 = $fileName;
        }
        $service->update();
        return redirect()->back()->with('success', 'Service uploaded successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        // dd($service);
        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully.');
    }
}
