<?php

namespace App\Http\Controllers\Music;

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
        $this->data = array(
            'title' => 'Music Band',
            'band' => 'Metallica',
            'song' => '<u>Black</u>',
            'style' => $aCss,
            'script' => $aScript
        );
        return view('song/band', $this->data);
    }

}
