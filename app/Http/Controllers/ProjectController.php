<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Timeline;
use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogs = Blog::all();
        return view('admin.project.create', compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project();
        $projectGallery = ''; // Initialize an empty string to store the concatenated file names

        foreach ($request->file('project_gallery') as $img) {
            if ($img) {
                $destinationPath = 'storage/images';
                $extension = $img->getClientOriginalExtension();
                $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
                $img->move($destinationPath, $fileName);

                // Append the current file name to the projectGallery string
                $projectGallery .= $fileName . ', ';
            }
        }

        // Remove the trailing comma and space
        $projectGallery = rtrim($projectGallery, ', ');

        // Store the concatenated file names in the $project object
        $project->project_gallery = $projectGallery;
        // dd($project->project_gallery);
        $project->name = $request->name;
        // $project->line_of_business = $request->line_of_business;
        $project->types_of_project = $request->types_of_project;
        $project->region = $request->region;
        $project->start = $request->start;
        $project->slut = $request->slut;
        $project->beställare = $request->beställare;
        $project->projektledare = $request->projektledare;
        $project->storlek = $request->storlek;
        $project->meta_tage = $request->meta_tage;
        $project->description = $request->description;
        $project->enabledVideo = $request->enabledVideo;
        $project->enabledTimleline = $request->enabledTimleline;
        $project->timeline_name = $request->timeline_name;
        $project->timeline_desciption = $request->timeline_desciption;

        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = '/storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $project->image = $fileName;
        }
        $project->save();
        // dd($project);
        if ($project->enabledVideo == 1) {
            $videoDataArray = json_decode($request->input('videoDataArray'), true);
            foreach ($videoDataArray as $vd) {
                // dd($vd);
                $video_gallery = new VideoGallery();
                $video_gallery->name = $vd['title'];
                $video_gallery->description = $vd['description'];
                $video_gallery->url = $vd['url'];
                $video_gallery->project_id = $project->id;
                $video_gallery->banner = $vd['banner'];
                $video_gallery->save();
            }
        }
        if ($project->enabledTimleline == 1) {

            $timelineItem = json_decode($request->input('timelineItem'), true);
            foreach ($timelineItem as $ti) {

                $timeline = new Timeline();
                $timeline->year = $ti['year'];
                $timeline->project_id = $project->id;
                $timeline->save();
                $timeline->blogs()->attach($ti['blogs']);
            }
        }
        // dd($);
        return response('Successfuly Add Project', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        // dd($project->videoGalleries);

        $blogs = Blog::all();
        return view('admin.project.edit', compact('project', 'blogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project = Project::find($request->id);
        $existingGallery = $project->project_gallery ?? ''; // Retrieve existing project_gallery or initialize as an empty string
        $projectGallery = $existingGallery; // Initialize with the existing value
        // dd($project->project_gallery);
        if ($project->project_gallery != "") {
            if($request->has('project_gallery')){
                foreach ($request->file('project_gallery') as $img) {
                    if ($img) {
                        $destinationPath = 'storage/images';
                        $extension = $img->getClientOriginalExtension();
                        $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
                        $img->move($destinationPath, $fileName);
    
                        // Append the current file name to the projectGallery string with a comma and space
                        $projectGallery .= ', ' . $fileName;
                    }
                }
            }
        } else {
            foreach ($request->file('project_gallery') as $img) {
                if ($img) {
                    $destinationPath = 'storage/images';
                    $extension = $img->getClientOriginalExtension();
                    $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
                    $img->move($destinationPath, $fileName);

                    // Append the current file name to the projectGallery string with a comma and space
                    $projectGallery = $fileName;
                }
            }
        }
        // dd($projectGallery);

        // Store the updated file names in the $project object
        $project->project_gallery = $projectGallery;
        // dd($project->project_gallery);
        $project->name = $request->name;
        $project->types_of_project = $request->types_of_project;
        $project->region = $request->region;
        $project->start = $request->start;
        $project->slut = $request->slut;
        $project->beställare = $request->beställare;
        $project->projektledare = $request->projektledare;
        $project->storlek = $request->storlek;
        $project->description = $request->description;
        $project->meta_tage = $request->meta_tage;
        // dd($project->meta_tage);
        $project->enabledVideo = $request->enabledVideo;
        $project->enabledTimleline = $request->enabledTimleline;
        $project->timeline_name = $request->timeline_name;
        $project->timeline_desciption = $request->timeline_desciption;
        // foreach ($request->project_gallery as $img) {
        
        // }
        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $project->image = $fileName;
        }
        $project->update();
        // dd($project);
        // dd($project);
        if ($project->enabledVideo == 1) {
            $videoDataArray = json_decode($request->input('videoDataArray'), true);
            foreach ($videoDataArray as $vd) {
                // dd($vd);
                $video_gallery = new VideoGallery();
                $video_gallery->name = $vd['title'];
                $video_gallery->description = $vd['description'];
                $video_gallery->url = $vd['url'];
                $video_gallery->project_id = $request->id;
                $video_gallery->banner = $vd['banner'];
                $video_gallery->save();
            }
        }
        if ($project->enabledTimleline == 1) {
            $timelineItem = json_decode($request->input('timelineItem'), true);
            foreach ($timelineItem as $ti) {

                $timeline = new Timeline();
                $timeline->year = $ti['year'];
                $timeline->project_id = $request->id;
                $timeline->save();
                $timeline->blogs()->attach($ti['blogs']);
                // dd($ti);
            }
        }
    }
    public function videoUpdate(Request $request, $id)
    {
        // dd($request->all());
        $video = VideoGallery::find($id);
        // dd($request['video_title']);
        if (!empty(request()->file('image'))) {
            $destinationPath = 'storage/images';
            $extension = request()->file('image')->getClientOriginalExtension();
            $fileName = 'storage/images/' . 'pi-' . time() . rand() . '.' . $extension;
            request()->file('image')->move($destinationPath, $fileName);
            $video->banner = $fileName;
        } else {
            $video->banner = $request['image'];
        }
        // dd($video->banner);
        $video->name = $request['video_title'];
        $video->description = $request['description'];
        $video->url = $request['video_url'];
        $video->update();
        return response($video, 200);
    }
    public function timelineUpdate(Request $request, $id)
    {
        // dd($request->input('year'));
        $timeline = Timeline::find($id);
        $timeline->year = $request['year'];
        $timeline->save();
        $timeline->blogs()->sync($request['blogs']);
        return response($timeline, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if ($project->enabledVideo == 1) {
            // dd($project->id);
            $video_gallery = VideoGallery::where('project_id', $id)->firstOrFail();
            $video_gallery->delete();
        }
        if ($project->enabledTimleline == 1) {
            $timeline = Timeline::where('project_id', $id)->firstOrFail();
            $timeline->blogs()->detach();
            $timeline->delete();
        }
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
    public function videoDelete($id)
    {
        $video_gallery = VideoGallery::find($id);
        // dd($video_gallery);
        $video_gallery->delete();
        return response('success', 'Video Gallery Item deleted successfully.');
    }
    public function timelineDelete($id)
    {
        $timeid = (int)$id;
        $timeline = Timeline::find($timeid);
        $timeline->blogs()->detach();
        $timeline->delete();
        return response('success', 'Video Gallery Item deleted successfully.');
    }
    function removeImage(Request $request, $id)
    {
        $remove = $request->name; // Assuming $request->name is an array containing the name you want to remove
        $project = Project::find($id);
        $imagename = $project->project_gallery;

        // Split the comma-separated image names into an array
        $imageNames = explode(', ', $imagename);

        // Use array_filter to remove the $remove value from the array
        $imageNames = array_filter($imageNames, function ($imageName) use ($remove) {
            return $imageName !== $remove;
        });

        // Join the remaining image names back into a comma-separated string
        $imagename = implode(', ', $imageNames);

        // Update the project's project_gallery property with the modified $imagename
        $project->project_gallery = $imagename;
        $project->save();

        return response($project->project_gallery, 200);
    }
}
