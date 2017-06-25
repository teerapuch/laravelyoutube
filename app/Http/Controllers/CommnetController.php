<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommnetController extends Controller
{
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
        $comment->comment = $request->comment;
        $comment->user = $request->user;
        $comment->save();

        return redirect('blog');
    }
}
