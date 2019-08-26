<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;
use App\FrontendProject;
use App\FrontendIndex;
use App\FrontendWork;
use App\FrontendAbout;
use App\FrontendSkill;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show_dashboard_index()
    {
        // return 1;
        if(\Auth::user()->role != 1) 
        {
            // abort(404);
            return redirect('/');
        }
        else 
        {
            $users = User::all();
            return view('backend.pages.users')->with('users' , $users);
        }
        
    }

    public function add_user()
    {
        return view('backend.pages.new_user');
    }

    public function blogs()
    {
        $blogs = Blog::all();
        return view('backend.pages.blogs')->with('blogs' , $blogs);
    }

    public function show_index()
    {
        $index = FrontendIndex::first();
        return view('backend.pages.show_index')->with('index' , $index);
    }

    public function show_edit_index($id)
    {
        $index = FrontendIndex::first();
        return view('backend.pages.edit_index')->with('index' , $index);
    }

    public function edit_index(Request $request)
    {
        $index = FrontendIndex::find($request->id);
        $index->heading = $request->heading;
        $index->description = $request->description;
        $index->save();

        return redirect('/showIndex')->with('success' , 'Index values edited......');
    }

    public function projects()
    {
        $projects = FrontendProject::all();
        return view('backend.pages.projects')->with('projects' , $projects);
    }

    public function show_edit_project($id)
    {
        $project = FrontendProject::find($id);
        return view('backend.pages.edit_project')->with('project' , $project);
    }

    public function edit_project(Request $request)
    {
        $project = FrontendProject::find($request->id);
        $project->project_url = $request->input('url');
        $project->project_image = $request->input('image');
        $project->project_name = $request->input('name');
        $project->save();
        return redirect('/showProjects')->with('success' , 'Project data edited......');
    }

    public function delete_project($id)
    {
        $project = FrontendProject::find($id);
        $project->delete();
        return redirect('/showProjects')->with('success' , 'Project data deleted......');
    }

    public function add_project()
    {
        return view('backend.pages.new_project');
    }

    public function add_new_project(Request $request)
    {
        $project = new FrontendProject();
        $project->project_image = $request->input('image');
        $project->project_url = $request->input('url');
        $project->project_name = $request->input('name');
        $project->save();

        return redirect('/showProjects')->with('success' , 'New project added......');
    }

    public function show_work()
    {
        $work = FrontendWork::first();
        return view('backend.pages.work')->with('work' , $work);
    }

    public function show_edit_work($id)
    {
        $work = FrontendWork::first();
        return view('backend.pages.edit_work')->with('work' , $work);
    }

    public function edit_work(Request $request)
    {
        $work = FrontendWork::find($request->id);
        $work->heading = $request->heading;
        $work->description = $request->description;
        $work->save();

        return redirect('/showWork')->with('success' , 'Work page values edited......');
    }

    public function show_about()
    {
        $about = FrontendAbout::first();
        return view('backend.pages.about')->with('about' , $about);
    }

    public function show_edit_about($id)
    {
        $about = FrontendAbout::first();
        return view('backend.pages.edit_about')->with('about' , $about);
    }

    public function edit_about(Request $request)
    {
        $about = FrontendAbout::find($request->id);
        $about->heading = $request->heading;
        $about->description = $request->description;
        $about->save();

        return redirect('/showAbout')->with('success' , 'About page values edited......');
    }

    // skills

    public function skill()
    {
        $skills = FrontendSkill::all();
        return view('backend.pages.skills')->with('skills' , $skills);
    }

    public function show_edit_skill($id)
    {
        $skill = FrontendSkill::find($id);
        return view('backend.pages.edit_skill')->with('skill' , $skill);
    }

    public function edit_skill(Request $request)
    {
        $skill = FrontendSkill::find($request->id);
        $skill->heading = $request->input('heading');
        $skill->progress_value = $request->input('progress');
        $skill->save();
        return redirect('/showSkill')->with('success' , 'Skill data edited......');
    }

    public function delete_skill($id)
    {
        $skill = FrontendSkill::find($id);
        $skill->delete();
        return redirect('/showSkill')->with('success' , 'Skill data deleted......');
    }

    public function add_skill()
    {
        return view('backend.pages.new_skill');
    }

    public function add_new_skill(Request $request)
    {
        $skill = new FrontendSkill();
        $skill->heading = $request->input('heading');
        $skill->progress_value = $request->input('progress');
        $skill->save();

        return redirect('/showSkill')->with('success' , 'New skill added......');
    }

}
