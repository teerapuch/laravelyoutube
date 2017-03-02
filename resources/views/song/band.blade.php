@extends('layouts/main')

@section('title', 'Band New Song')

@section('content')

    @if ($band == 'Metallica')
        <h2>Band :: {{ $band }}</h2>
        <h3>Song :: {!! $song !!}</h3>
    @else
        No Band And Song
    @endif


@endsection
