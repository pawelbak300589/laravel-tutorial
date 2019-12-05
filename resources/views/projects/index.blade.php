@extends('layouts.main')

@section('content')
    <h1>Projects</h1>

    <ul>
        @foreach($projects as $project)
            <li>
                {{ $project->title }}
                <a href="/projects/{{ $project->id }}/edit">Edit</a>
                <form action="/projects/{{ $project->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="/projects/create">Create New Project</a>
@endsection
