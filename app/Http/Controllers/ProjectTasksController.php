<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $validatedTask = request()->validate(['description' => 'required|min:3|max:255']);
        $project->addTask($validatedTask);

        return back();
    }

    public function update(Task $task)
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }
}
