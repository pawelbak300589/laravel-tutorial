@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
    <div class="title m-b-md">
        Welcome {{ $foo }}
    </div>

    <div class="links">
        <a href="/contact">Contact</a>
    </div>
@endsection
