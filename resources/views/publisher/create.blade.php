@extends('layouts/main')

@section('content')
    <h1>Publisher Form</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            @if (isset($publisher))
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

            @if (isset($publisher))
                {{ Form::open([ 'method'  => 'put', 'route' => [ 'publisher.update', $publisher->id ] ]) }}
            @else
                {{ Form::open(['url' => 'publisher']) }}
            @endif
                <div class="row">
                    <div class="col-xs-2">
                        {{ Form::label('publisher', 'Publisher') }}
                    </div>
                    <div class="col-xs-5">
                        @if (isset($publisher->publisher))
                            {{ Form::text('publisher', $publisher->publisher, ['class' => 'form-control']) }}
                            {{ Form::hidden('id', $publisher->id) }}
                        @else
                            {{ Form::text('publisher', '', ['class' => 'form-control']) }}
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
