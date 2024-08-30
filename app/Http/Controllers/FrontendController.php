<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\SectionSetting;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Mail\SendEmail;
use App\Models\Brand;
use App\Models\Page;
use App\Models\Policy;
use App\Models\Subscribe;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{

    public function index()
    {
        $Offers = SectionSetting::where('name', '=', 'Offer')->first();
        $Clients = SectionSetting::where('name', '=', 'Clients')->first();
        $Recent = SectionSetting::where('name', '=', 'Recent Project')->first();
        $About = SectionSetting::where('name', '=', 'About')->first();
        // dd($Clients);
        $sliders = Slider::all();
        $services = Service::all();
        $projects = Project::all();
        $brands = Brand::all();
        $testimonials = Testimonial::all();
        $blogs = Blog::limit('4')->get();
        // dd($blogs);
        return view('frontend.home', compact('Offers', 'Clients', 'Recent', 'About', 'brands', 'sliders', 'services', 'projects', 'testimonials', 'blogs'));
    }
    public function blog()
    {
        $blogs = Blog::paginate(15);
        // dd($blogs);
        return view('frontend.blog', compact('blogs'));
    }
    public function singleBlog($slug)
    {
        $blogs = Blog::limit(2)->get();
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $section = SectionSetting::where('name', '=', 'quote')->first();
        return view('frontend.blog.single-blog', ['blog' => $blog, 'blogs' => $blogs, 'section' => $section]);
    }
    public function projects()
    {
        $teams = Team::paginate(4);

        $Team = SectionSetting::where('name', '=', 'Team')->first();
        $Recent = SectionSetting::where('name', '=', 'Recent Project')->first();
        $projects = Project::paginate(15);
        // dd($blogs);
        return view('frontend.projects', compact('projects', 'teams', 'Team', 'Recent'));
    }
    public function singleProject($slug)
    {
        $projects = Project::limit(2)->get();
        $project = Project::with(['videoGalleries', 'timelines.blogs'])
            ->where('slug', $slug)->firstOrFail();

        return view('frontend.project.single-project', ['project' => $project, 'projects' => $projects]);
    }
    public function services()
    {
        $Clients = SectionSetting::where('name', '=', 'Clients')->first();

        $services = Service::paginate(15);
        $testimonials = Testimonial::paginate(15);
        // dd($blogs);
        return view('frontend.services', compact('services', 'testimonials', 'Clients'));
    }
    public function singleService($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('frontend.services.single-service', ['service' => $service]);
    }
    public function singleTeam($slug)
    {
        $team = Team::where('slug', $slug)->firstOrFail();
        return view('frontend.team.single-team', ['team' => $team]);
    }
    public function about()
    {
        $teams = Team::paginate(4);
        $pages = Page::where('name', 'Om Oss')->first();
        $section_array = explode(',', $pages->section_setting_id);

        // Create an array to hold the order of section IDs
        $sectionOrder = array_flip($section_array);

        // Use the "whereIn" method to retrieve records with matching IDs and order them accordingly
        $pageSections = SectionSetting::whereIn('id', $section_array)
            ->orderBy(DB::raw("FIELD(id, " . implode(',', $section_array) . ")"))
            ->get();
        // dd($pageSections);
        $Team = SectionSetting::where('name', '=', 'Team')->first();

        $About = SectionSetting::where('name', '=', 'About')->first();

        return view('frontend.about', compact('teams', 'Team', 'About', 'pageSections'));
    }
    public function sendEmail(Request $request)
    {
        // dd($request->all());
        $data = [
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'message' => $request->input('message'),
        ];

        Mail::to('hr@oscorb.com')->send(new SendEmail($data)); // Replace with your mail class

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
    public function subscribe(Request $request)
    {
        // dd($request->all());
        $subscribe = new Subscribe();
        $subscribe->email = $request->email;
        $subscribe->save();

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
    public function policy()
    {
        $policy = Policy::find(1);
        return view('frontend.policy', compact('policy'));
    }
}
