<?php

namespace App\Http\Controllers\Music;

use DB;
use App\Http\Controllers\Controller;

/**
 *
 */
class SongController extends Controller
{

    function __construct()
    {
        # code...
    }

    public function index()
    {
        //return 'Hello From Song Controller';
        return view('song.index');
    }

    public function play()
    {
        //return view('song/player');
        /*
        $band = DB::table('blog_tbl')->get();
        return view('song/player')
        ->with('band', 'OASIS')
        ->with('album','Morning');
        */
        /*
        return view('song/player')->with([
            'band' => 'OASIS',
            'album' => 'Slide away'
        ]);
        */
        // return view('song/player')->withBand('OASIS')->withAlbum('Slide');
        $this->data = array(
            'band' => 'OASIS',
            'album' => 'Wonder Wall'
        );
        return view('song/player', $this->data);

    }

    public function band()
    {
        $aCss = array('css/song/style.css');
        $aScript = array('js/song/main.js');

        // $band = DB::table('blog_tbl')->find('3');
        // $band = DB::select('select title,blog_th from blog_tbl where deleted = ?', [0]);
        //$band = DB::insert('insert into blog_tbl (title, blog_th) values (?, ?)', ['green day', 'best of rock']);
        // $band_up = DB::update('update blog_tbl set blog_th = "Best of rock band" where title = ?', ['green day']);
        //$band_del = DB::delete('delete from blog_tbl where title = ?', ['green day']);
        $band = DB::table('blog_tbl')->get();

        //dd($band);
        /*
        $this->data = array(
            'title' => 'Music Band',
            'band' => 'Metallica',
            'song' => '<u>Black</u>',
            'style' => $aCss,
            'script' => $aScript
        );
        */
        $this->data = array(
            'band' => $band,
            'style' => $aCss,
            'script' => $aScript
        );
        return view('song/band', $this->data);
    }

    public function show()
    {
        $aCss = array('css/song/style.css');
        $aScript = array('js/song/main.js');
        $blog = DB::table('blog_tbl')->get();
        $data = array(
            'blog' => $blog,
            'style' => $aCss,
            'script' => $aScript
        );
        return view('song.show', $data);
    }

}
