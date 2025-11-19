{{-- <h1>This is a About Page</h1>
<h1>{{ $aboutOne }}</h1>
<h1>{{ $aboutTwo }}</h1> --}}

@extends('layouts.main')
@section('title', 'About')
@section('content')
    <h1 class="mt-5 text-danger">About</h1>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis
    earum distinctio nihil exercitationem quidem neque odit aliquid quasi esse, repudiandae, adipisci non placeat.

{{-- @php
    echo "<h2>Hello World</h2>";
@endphp --}}

{{-- @php
    $data = true;
@endphp
@isset($data)
    <div class="alert alert-success">Success</div>
@endisset --}}

{{-- @php
    $i = 5;
@endphp
@switch($i)
    @case(1)
        <div class="alert alert-danger">Danger</div>
        @break
    @case(2)
        <div class="alert alert-warning">Warning</div>
        @break
    @case(3)
        <div class="alert alert-success">Success</div>
        @break
    @default
        <div class="alert alert-info">Info</div>    
@endswitch --}}

@php
    $i = 'abc';
@endphp
@empty($i)
    <div class="alert alert-danger">The variable is empty</div>
@endempty

@endsection
