@extends('layouts.main')

@section('content')
    <h1>Edit Project</h1>

    <form action="/projects/{{ $project->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div>
            <input type="text" name="title" placeholder="Project title" value="{{ $project->title }}">
        </div>
        <div>
            <textarea name="description" id="description" cols="30" rows="10"
                      placeholder="Project description">{{ $project->description }}</textarea>
        </div>
        <div>
            <button type="submit">Update project</button>
        </div>
    </form>

@endsection
