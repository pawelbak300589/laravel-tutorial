@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col s12">
            <h1>Create a New Project</h1>
        </div>
        <form action="/projects" method="POST" class="col s12">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <input id="title" name="title" type="text"
                           class="validate{{ $errors->has('title') ? ' invalid' : '' }}" value="{{ old('title') }}">
                    <label for="title">Project title</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="description" name="description"
                              class="materialize-textarea{{ $errors->has('description') ? ' invalid' : '' }}">{{ old('description') }}</textarea>
                    <label for="description">Project description</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit">
                        Create project <i class="material-icons right">add</i>
                    </button>
                </div>
            </div>
        </form>
        <div class="col s12">
            @include('partials/errors')
        </div>
    </div>

@endsection
