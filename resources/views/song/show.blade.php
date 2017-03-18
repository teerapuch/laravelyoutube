@extends('layouts/main')

@section('title', 'Show Band')

@section('content')

    @foreach ($blog as $b)
        <p>This is Band {{ $b->title }}</p>
    @endforeach

@endsection
