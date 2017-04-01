@extends('layouts/main')

@section('content')
<h1>Form Code</h1>
<div class="panel panel-primary">
    <div class="panel-heading">
        @if(isset($lib))
            Edit Form
        @else
            Add Form
        @endif
    </div>
    @if(isset($lib))
        {{ Form::open(['method' => 'put', 'route' => ['lib.update', $lib->id] ]) }}
    @else
        {{ Form::open(['url' => 'lib']) }}
    @endif
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
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('title', 'Title Library') }}
            </div>
            <div class="col-xs-5">
                @if(isset($lib->title))
                    {{ Form::text('title',$lib->title,['class' => 'form-control']) }}
                @else
                    {{ Form::text('title','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('language', 'Language') }}
            </div>
            <div class="col-xs-5">
                @if(isset($lib->language))
                    {{ Form::text('language',$lib->language,['class' => 'form-control']) }}
                @else
                    {{ Form::text('language','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('star', 'Star') }}
            </div>
            <div class="col-xs-5">
                @if(isset($lib->star))
                    {{ Form::text('star',$lib->star,['class' => 'form-control']) }}
                @else
                    {{ Form::text('star','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-5">
                {{ Form::submit('Save',['class' => 'btn btn-primary']) }}
            </div>
        </div>
    </div>
    {{ Form::close() }}
</div>
@endsection
