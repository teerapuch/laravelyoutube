@extends('layouts/main')

@section('content')
<h1>Hello Code</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Language</th>
            <th>Star</th>
            <th>Create</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @forelse ($code as $key => $c)
        <tr>
            <td>{{ $c['id'] }}</td>
            <td>{{ $c['title'] }}</td>
            <td>{{ $c['language'] }}</td>
            <td>{{ $c['star'] }}</td>
            <td>{{ $c['created_at'] }}</td>
            <td>
                {{ Html::link('code/'.$c['id'], 'View', array('class' => 'btn btn-primary'))}}
                {{ Html::link('code/'.$c['id'].'/edit', 'Edit', array('class' => 'btn btn-primary'))}}
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">No data!!</td>
        </tr>
        @endforelse
    </tbody>
</table>
<div class="row">
    <div class="col-xs-5">
        {{ Html::link('code/create', 'Add New', array('class' => 'btn btn-primary'))}}
    </div>
</div>
@endsection
