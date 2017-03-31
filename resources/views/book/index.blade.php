@extends('layouts/main')

@section('content')
    <h1>Book Shelf</h1>
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
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
                    <td>
                        @foreach ($publishers as $p)
                            @if ($book->publisher == $p->id)
                                {{ $p->publisher }}
                            @endif
                        @endforeach
                    </td>
                    <td>{{$book->created_at}}</td>
                    <td>
                        {{ Html::link('book/'.$book->id, 'View', array(
                            'class' => 'btn btn-primary')
                            )
                        }}
                        {{ Html::link('book/'.$book->id.'/edit', 'Edit', array(
                            'class' => 'btn btn-primary')
                            )
                        }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-xs-4">
            {{ Html::link('book/create', 'Add New', array(
                'class' => 'btn btn-primary'
                ))
            }}
        </div>
        <div class="col-xs-8"></div>
    </div>
@endsection
