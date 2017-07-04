<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $script = array('js/blog/app.js');

        $comment = Comment::all();
        $data = array(
            'script' => $script,
            'blog' => $blog,
            'comment' => $comment
        );
        //return view("blog.index",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'comment'  => 'required|max:100',
            'user' => 'required|max:100'
        ]);

        $comment = new Comment;
        $comment->blog_id = $request->blog_id;
        $comment->comment = $request->comment;
        $comment->user = $request->user;
        $comment->save();

        return redirect('blog');
    }
}
