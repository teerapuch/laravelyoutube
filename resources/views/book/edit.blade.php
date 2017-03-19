@extends('layouts/main')

@section('content')
    <h1>Book To Shelf</h1>
    <div class="panel panel-default">
        <div class="panel-heading">Edit Form</div>
        <div class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- Form::open(['url' => 'book','method' => 'put']) --}}
            {{ Form::open([ 'method'  => 'put', 'route' => [ 'book.update', $book->id ] ]) }}
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('title', 'Title Book') }}
                    </div>
                    <div class="col-xs-5">
                        {{ Form::text('title', $book->title, ['class' => 'form-control']) }}
                        {{ Form::hidden('id', $book->id) }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('isbn', 'ISBN') }}
                    </div>
                    <div class="col-xs-5">
                        {{ Form::text('isbn', $book->isbn, ['class' => 'form-control']) }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('price', 'Price') }}
                    </div>
                    <div class="col-xs-5">
                        {{ Form::text('price', $book->price, ['class' => 'form-control']) }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('author', 'Author') }}
                    </div>
                    <div class="col-xs-5">
                        {{ Form::text('author', $book->author, ['class' => 'form-control']) }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('publisher', 'Publisher') }}
                    </div>
                    <div class="col-xs-5">
                        {{ Form::select('publisher',
                            ['1' => 'Nanmee book',
                            '2' => 'Spring book',
                            '3' => 'Seed book'], null, ['class' => 'form-control'])
                        }}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-5">
                        {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
