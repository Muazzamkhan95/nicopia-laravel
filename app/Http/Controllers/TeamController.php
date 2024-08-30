<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $team = new Team();
        $team->name = $request->name;
        $team->job_description = $request->job_description;
        $team->description = $request->description;
        // dd($request->hasFile('image'));
        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $team->image = $fileName;
        }
        $team->save();
        return redirect()->route('teams.index')->with('success', 'Team Add successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view('admin.team.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return response($team, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $team->name = $request->name;
        $team->description = $request->description;
        $team->job_description = $request->job_description;
        // dd($request->hasFile('image'));

        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $team->image = $fileName;
        }
        $team->update();
        return redirect()->back()->with('success', 'Testimonial uploaded successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('teams.index')->with('success', 'Testimonial deleted successfully.');
    }
}
