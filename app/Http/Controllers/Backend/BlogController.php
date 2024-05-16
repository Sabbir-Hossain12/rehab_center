<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Contact;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function manage()
    {
        $blogs = Blog::all();
        return view('backend.pages.blog.manage', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.blog.create-blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog();

        if( !is_null( $blog ) ){
            $blog->title       =  $request->title;
            $blog->slug        =  Str::Slug($request->title);
            $blog->posted_by   =  Auth::user()->name ?? 'annonymous';
            $blog->long_desc   =  $request->description;
            $blog->status      =  $request->status;

            if( $request->file('thumbnail') ){
                $thumbnail          = $request->file('thumbnail');

                $imageName          = microtime('.') . '.' . $thumbnail->getClientOriginalExtension();
                $imagePath          = 'public/backend/images/';
                $thumbnail->move($imagePath, $imageName);

                $blog->img          = $imagePath . $imageName;
            }

            $blog->date        =  date('d-m-y');
            $blog->time        =  date(now());

            $blog->save();

            return redirect()->route('blog.manage');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('backend.pages.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::find($id);

        if( !is_null($blog) ){
            $blog->title       =  $request->title;
            $blog->slug        =  Str::Slug($request->title);
            $blog->posted_by   =  Auth::user()->name  ?? 'annonymous';
            $blog->long_desc   =  $request->description;
            $blog->status      =  $request->status;

            if( $request->file('thumbnail') ){
                $thumbnail          = $request->file('thumbnail');

                if ( !is_null($blog->thumbnail) && file_exists($blog->thumbnail))  {
                    unlink($blog->thumbnail); // Delete the existing thumbnail
                }

                $imageName          = microtime('.') . '.' . $thumbnail->getClientOriginalExtension();
                $imagePath          = 'public/backend/images/';
                $thumbnail->move($imagePath, $imageName);

                $blog->img = $imagePath . $imageName;
            }

            $blog->save();

            return redirect()->route('blog.manage');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);

        if( !is_null($blog) ){

            if( !is_null( $blog->thumbnail ) ){
                unlink( $blog->thumbnail );
            }

            $blog->delete();

            return redirect()->back();
        }
    }
    public function singleBlog(string $id)
    {
        $singleBlog = Blog::find($id);

        return view('backend.pages.blog.single_blog', compact('singleBlog'));
    }

    public function singleBlogComment(Request $request)
    {
        $singleBlogComments = new Comment();

        if( !is_null($singleBlogComments) ){
            $singleBlogComments->blog_id         =  $request->blog_id;
            $singleBlogComments->user_name       =  $request->user_name;
            $singleBlogComments->user_email      =  $request->user_email;
            $singleBlogComments->message         =  $request->message;
            $singleBlogComments->comment_date    =  date('d-m-y');
            $singleBlogComments->comment_time    =  date(now());
            $singleBlogComments->status          =  1;

            $singleBlogComments->save();
        }

        return redirect()->back();
    }

}
