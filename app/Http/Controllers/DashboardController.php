<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::count();
        $project = Project::count();
        $service = Service::count();
        return view('admin.dashboard', compact('blog', 'project', 'service'));
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
    public function show($dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cr)
    {
        //
    }
}
