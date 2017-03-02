<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 *
 */
class MovieController extends Controller
{

    function __construct()
    {
        # code...
    }

    public function index()
    {
        /*
        $this->data = array(
            'title' => 'Movie Page',
            'subtitle' => 'Best movie 2016'
        );
        */
        //return "Hello From Movie Controller";
        //return view('movie/index');
        // return view('movie.index',['title' => $title, 'subtitle' => $subtitle]);
        // return view('movie.index',$this->data);
        return view('movie/index')->withTitle('Movie Page')->withSubtitle('Hollywood Shock');
        /*
        return view('movie.index')
        ->with('title','Movie Page')
        ->with('subtitle','Best movie 2017');
        */
        /*
        return view('movie/index')->with([
            'title' => 'Movie Page',
            'subtitle' => 'Best Hollywood movie 2016'
        ]);
        */

    }

    public function view()
    {
        return "Hello From Movie Controller View Method";
    }

    public function listview()
    {
        $this->data = array(
            'title' => 'Movie Page',
            'categories' => 'Drama'
        );
        return view('movie/list',$this->data);
    }

}
