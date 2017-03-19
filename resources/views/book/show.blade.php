@extends('layouts/main')

@section('content')
    <h1>Book Shelf</h1>
    <div class="panel panel-default">
        <div class="panel-heading">{{ $book->title }}</div>
        <div class="panel-body">
            <ul>
                <li>isbn : {{ $book->isbn }}</li>
                <li>price : {{ $book->price }}</li>
                <li>author : {{ $book->author }}</li>
                <li>publisher : {{ $book->publisher }}</li>
                <li>created : {{ $book->created_at }}</li>
            </ul>
        </div>
    </div>
@endsection
