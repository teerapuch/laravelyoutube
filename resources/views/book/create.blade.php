@extends('layouts/main')

@section('content')
    <h1>Book To Shelf</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            @if (isset($book))
                Edit Form
            @else
                Add Form
            @endif
        </div>
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

            @if (isset($book))
                {{ Form::open([ 'method'  => 'put', 'route' => [ 'book.update', $book->id ] ]) }}
            @else
                {{ Form::open(['url' => 'book']) }}
            @endif
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('title', 'Title Book') }}
                    </div>
                    <div class="col-xs-5">
                        @if (isset($book->title))
                            {{ Form::text('title', $book->title, ['class' => 'form-control']) }}
                            {{ Form::hidden('id', $book->id) }}
                        @else
                            {{ Form::text('title', '', ['class' => 'form-control']) }}
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('isbn', 'ISBN') }}
                    </div>
                    <div class="col-xs-5">
                        @if (isset($book->isbn))
                            {{ Form::text('isbn', $book->isbn, ['class' => 'form-control']) }}
                        @else
                            {{ Form::text('isbn', '', ['class' => 'form-control']) }}
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('price', 'Price') }}
                    </div>
                    <div class="col-xs-5">
                        @if (isset($book->price))
                            {{ Form::text('price', $book->price, ['class' => 'form-control']) }}
                        @else
                            {{ Form::text('price', '0.00', ['class' => 'form-control']) }}
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('author', 'Author') }}
                    </div>
                    <div class="col-xs-5">
                        @if (isset($book->author))
                            {{ Form::text('author', $book->author, ['class' => 'form-control']) }}
                        @else
                            {{ Form::text('author', '', ['class' => 'form-control']) }}
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('publisher', 'Publisher') }}
                    </div>
                    <div class="col-xs-5">
                        @if (isset($book->publisher))
                            {{ Form::select('publisher',
                                ['1' => 'Nanmee book',
                                '2' => 'Spring book',
                                '3' => 'Seed book'], $book->publisher, ['class' => 'form-control'])
                            }}
                        @else
                            {{ Form::select('publisher',
                                ['1' => 'Nanmee book',
                                '2' => 'Spring book',
                                '3' => 'Seed book'], null, ['class' => 'form-control'])
                            }}
                        @endif
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
