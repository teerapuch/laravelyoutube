@extends('layouts/main')

@section('content')
    <h1>Book Shelf</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>isbn</th>
                <th>Price</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <td>{{$book->isbn}}</td>
                    <td>{{$book->price}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->publisher}}</td>
                    <td>{{$book->created_at}}</td>
                    <td>
                        {{ Html::link('book/'.$book->id, 'View', array(
                            'class' => 'btn btn-primary')
                            )
                        }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
