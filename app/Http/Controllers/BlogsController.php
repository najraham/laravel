<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    public function add_blog(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('description');
        $blog->user_id = \Auth::user()->id;
        $blog->save();

        return redirect('/blogs')->with('success' , 'Blog added sucessfully...');
    }

    public function delete_blog($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect('/blog')->with('success' , 'Blog deleted.......');
    }
}
