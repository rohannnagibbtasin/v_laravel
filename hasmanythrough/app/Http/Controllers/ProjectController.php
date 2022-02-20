<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Deployment;
use App\Models\Language;
use App\Models\Environment;
class ProjectController extends Controller
{
    public function add_project(){
        $project = new Project();
        $project->name = 'E-commerce';
        $project->save();
    }
}
