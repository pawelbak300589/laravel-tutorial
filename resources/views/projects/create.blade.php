@extends('layouts.main')

@section('content')
    <h1>Create a New Project</h1>

    <form action="/projects" method="POST">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>
        <div>
            <textarea name="description" id="description" cols="30" rows="10"
                      placeholder="Project description"></textarea>
        </div>
        <div>
            <button type="submit">Create project</button>
        </div>
    </form>

@endsection
