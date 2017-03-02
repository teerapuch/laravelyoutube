@extends('layouts/main')
@section('page_title','Test title')

@section('header')
    <h1>{{ $title }}</h1>
@endsection


@section('content')
    <h2>{{ $categories }}</h2>

@endsection


@section('footer')
    <div class="footer">
        @copyright 2017
    </div>
@endsection

{{--

Metallica
Enter Sandman

Pearl Jam
Black

Vampire Weekend
Oxford Comma

Echoing Data If It Exists
{{ isset($name) ? $name : 'Default' }}
OR
{{ $name or 'Default' }}

Displaying Unescaped Data
$name = "<u>Teerapuch</u>";
Hello, {!! $name !!}.

IF Statements
@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif

@unless (Auth::check())
    You are not signed in.
@endunless


## Loop
@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor

@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach

@forelse ($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>No users</p>
@endforelse

@while (true)
    <p>I'm looping forever.</p>
@endwhile

@php
    rand(1,10)
@endphp

--}}
