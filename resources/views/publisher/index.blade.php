@extends('layouts/main')

@section('content')
    <h1>Publisher Books</h1>
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Publisher</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publisher as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->publisher}}</td>
                    <td>{{$p->created_at}}</td>
                    <td>
                        {{ Form::open(['route' => ['publisher.destroy', $p->id], 'method' => 'delete']) }}
                            {{ Html::link('publisher/'.$p->id.'/edit', 'Edit', array(
                                'class' => 'btn btn-primary')
                                )
                            }}
                            {{ Form::submit('Delete',array('class' => 'btn btn-primary')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-xs-4">
            {{ Html::link('publisher/create', 'Add New', array(
                'class' => 'btn btn-primary'
                ))
            }}
        </div>
        <div class="col-xs-8"></div>
    </div>
@endsection
