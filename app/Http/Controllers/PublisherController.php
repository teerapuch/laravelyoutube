<?php

namespace App\Http\Controllers;

use App\publisher;
use Illuminate\Http\Request;
use Session;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $aCss = array('css/book/style.css');
        $aScript = array('js/book/main.js');
        $publisher = publisher::all();
        $data = array(
            'style' => $aCss,
            'script' => $aScript,
            'publisher' => $publisher
        );
        return view('publisher/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('publisher/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'publisher'  => 'required|max:100'
        ]);

        $publisher = new Publisher;
        $publisher->publisher = $request->publisher;
        $publisher->save();

        return redirect('publisher');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id !== '') {
            $publishers = Publisher::find($id);
            $data = array(
                'publisher' => $publishers,
            );
            return view('publisher/create',$data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'publisher'  => 'required|max:100'
        ]);
        $publisher = Publisher::find($id);
        $publisher->publisher = $request->publisher;
        // and save to database
        $publisher->save();

        // redirect
        Session::flash('message', 'Successfully updated publisher!');
        return redirect('publisher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publisher = Publisher::find($id);
        // and delete from database
        $publisher->delete();

        // redirect
        Session::flash('message', 'Successfully delete publisher!');
        return redirect('publisher');
    }
}
