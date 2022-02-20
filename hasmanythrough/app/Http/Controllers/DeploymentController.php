<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Deployment;
use App\Models\Language;
use App\Models\Environment;
class DeploymentController extends Controller
{
    public function add_deployment($id){
        $language = Language::find($id);
        $deployment = new Deployment();
        $deployment->work = 'pending';
        $language->deployment()->save($deployment);
    }
    public function show_deployment($id){
        // $deployment = Project::find($id)->language->flatMap->deployment;
        $deployment = Project::find($id)->deployment;
        return $deployment;
    }
}