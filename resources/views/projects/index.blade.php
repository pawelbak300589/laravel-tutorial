@extends('layouts.main')

@section('content')
    <h1>Projects</h1>

    <ul>
        @foreach($projects as $project)
            <li>{{$project->title}}</li>
        @endforeach
    </ul>
    <a href="/projects/create">Create New Project</a>
@endsection
