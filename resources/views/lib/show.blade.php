@extends('layouts/main')

@section('content')
<h1>Library</h1>
<div class="panel panel-primary">
    <div class="panel-heading">
        {{ $lib->title }}
    </div>
    <div class="panel-body">
        <ul>
            <li>{{ $lib->title }}</li>
            <li>{{ $lib->language }}</li>
            <li>{{ $lib->star }}</li>
            <li>{{ $lib->created_at }}</li>
        </ul>
    </div>
</div>
@endsection
