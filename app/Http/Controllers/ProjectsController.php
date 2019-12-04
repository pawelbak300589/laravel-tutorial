<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function add()
    {
        $project = new Project();
        $project->setTitle('New Project');
        $project->setDescription('Description od the new project');
        return $project->save();
    }
}
