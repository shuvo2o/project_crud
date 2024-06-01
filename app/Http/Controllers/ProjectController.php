<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function Index()
    {
        $projects = Project::with('skill')->get();

        return Inertia::render('Project/Index');
    }
    public function ProjectCreate(){
        return Inertia::render('Project/Create');
    }
}
