<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FrontendIndex;
use App\FrontendProject;
use App\FrontendAbout;
use App\FrontendSkill;
use App\FrontendWork;
use App\Blog;

class FrontendPagesController extends Controller
{
    public function show_index()
    {
        error_log(\Auth::user()->id);
        $index = FrontendIndex::first();
        $projects = FrontendProject::all();
        return view('frontend.pages.index') -> with ([
            'index'=>$index,
            'projects'=>$projects,
        ]);
    }

    public function show_about()
    {
        $about = FrontendAbout::first();
        $skills = FrontendSkill::all();
        return view('frontend.pages.about')->with([
            'about'=>$about,
            'skills'=>$skills,
        ]);
    }

    public function show_work()
    {
        $work = FrontendWork::first();
        $projects = FrontendProject::all();
        return view('frontend.pages.work')-> with ([
            'work'=>$work,
            'projects'=>$projects,
        ]);
    }

    public function show_contact()
    {
        return view('frontend.pages.contact');
    }

    public function show_blogs()
    {
        $blogs = Blog::all();
        return view('frontend.pages.blog')->with('blogs' , $blogs);
    }

    public function show_single_blog($id)
    {
        $blog = Blog::find($id);
        return view('frontend.pages.single_blog')->with('blog' , $blog);
    }

    public function new_blog()
    {
        return view('frontend.pages.new_blog');
    }

    public function edit_blog(Request $request)
    {
        $blog = Blog::find($request->id);
        $blog->title = $request->input('title');
        $blog->content = $request->input('description');
        $blog->save();

        return redirect('/blogs')->with('success' , 'Blog edited...');
    }

}
