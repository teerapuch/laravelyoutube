<?php

namespace App\Http\Controllers;

use App\book; // call model book
use Illuminate\Http\Request;
use Session; // call session
//use Request; // call Facades Request
//use Validator; // call Facades Validator

class BookController extends Controller
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
        $books = book::all();

        $data = array(
            'books' => $books,
            'style' => $aCss,
            'script' => $aScript
        );

        return view('book/index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('book/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // https://laravel.com/docs/5.3/validation
        $this->validate($request, [
            'title'  => 'required|max:100',
            'price'  => 'required|numeric',
            'author' => 'required|max:100'
        ]);

        $book = new Book;

        $book->title     = $request->title;
        $book->isbn      = $request->isbn;
        $book->price     = $request->price;
        $book->author    = $request->author;
        $book->publisher = $request->publisher;

        $book->save();

        return redirect('book');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = book::find($id);
        $data = array(
            'book' => $book,
        );

        return view('book/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = book::find($id);
        $data = array(
            'book' => $book,
        );
        return view('book/edit',$data);
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
        // https://laravel.com/docs/5.3/validation
        $this->validate($request, [
            'title'  => 'required|max:100',
            'price'  => 'required|numeric',
            'author' => 'required|max:100'
        ]);

        // store
        $book = Book::find($id);
        $book->title     = $request->title;
        $book->isbn      = $request->isbn;
        $book->price     = $request->price;
        $book->author    = $request->author;
        $book->publisher = $request->publisher;
        // and save to database
        $book->save();

        // redirect
        Session::flash('message', 'Successfully updated book!');
        return redirect('book');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
