@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col s12">
            <h1>{{ $project->title }}</h1>
        </div>
        <div class="col s12">
            @if($project->tasks->count())
                <ul class="collection with-header">
                    <li class="collection-header"><h4>{{ $project->description }}</h4></li>
                    @foreach($project->tasks as $task)
                        <li class="collection-item">
                            <form action="/task/{{ $task->id }}/completed" method="POST">
                                @csrf
                                @if($task->completed)
                                    @method('PATCH')
                                @endif
                                <p>
                                    <label>
                                        <input type="checkbox" name="completed"
                                               onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }} />
                                        <span class="{{ $task->completed ? 'is-completed' : '' }}">
                                            {{ $task->description }}
                                        </span>
                                    </label>
                                </p>
                            </form>
                        </li>
                    @endforeach
                    <li class="collection-item">
                        <form action="/projects/{{ $project->id }}/tasks" method="POST">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="description" name="description" type="text" class="validate" required>
                                    <label for="description">New Task</label>
                                </div>
                                <div class="col s12">
                                    <button class="btn waves-effect waves-light" type="submit">
                                        Add New Task <i class="material-icons right">add</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
                @include('partials/errors')
            @endif
        </div>
    </div>

@endsection
