<?php

namespace App\Http\Controllers\Web;
use App\models\Blog;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class blogController extends Controller
{
    public function index(){

        $blogs=Blog::orderBy('id','DESC')->paginate(9);

        return view('web.blog.blog',['blogs'=>$blogs]);

    }
    public function show($id){

        $blog=Blog::find($id);
        $commentsCount = Comment::all()->count();

        return view('web.blog.singleBlog',[
            'blog' => $blog,
            'commentsCount' => $commentsCount,
        ]);
    }

}
