@extends('layouts/main')

@section('content')
    <h1>Form Code</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            @if (isset($code))
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

            @if (isset($code))
                {{ Form::open([ 'method'  => 'put', 'route' => [ 'code.update', $code->id ] ]) }}
            @else
                {{ Form::open(['url' => 'code']) }}
            @endif
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('title', 'Title Code') }}
                    </div>
                    <div class="col-xs-5">
                        @if (isset($code->title))
                            {{ Form::text('title', $code->title, ['class' => 'form-control']) }}
                        @else
                            {{ Form::text('title', '', ['class' => 'form-control']) }}
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('language', 'Language') }}
                    </div>
                    <div class="col-xs-5">
                        @if (isset($code->language))
                            {{ Form::text('language', $code->language, ['class' => 'form-control']) }}
                        @else
                            {{ Form::text('language', '', ['class' => 'form-control']) }}
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('star', 'Star') }}
                    </div>
                    <div class="col-xs-5">
                        @if (isset($code->star))
                            {{ Form::text('star', $code->star, ['class' => 'form-control']) }}
                        @else
                            {{ Form::text('star', '', ['class' => 'form-control']) }}
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
