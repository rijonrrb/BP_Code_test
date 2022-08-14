<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blogger;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use DateTime;

class BlogController extends Controller
{
    public function allBlog(){
        $bloglist = Blog::paginate(3);
        return view('Blogger.AllBlog')->with('bloglist', $bloglist);
    }
    public function welcome(){
        $bloglist = Blog::paginate(3);
        return view('welcome')->with('bloglist', $bloglist);
    }

    public function APIPost(Request $req){
        $blog = new Blog();
        $blog->user_id = $req->user_id;
        $blog->title = $req->title;
        $blog->slug = $req->slug;
        $blog->description = $req->description;
        $blog->image = $req->image;
        $blog->save();
    }
}
