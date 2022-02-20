<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Deployment;
use App\Models\Language;
use App\Models\Environment;
class LanguageController extends Controller
{
    public function add_language($id){
        $project = Project::find($id);
        $language = new Language();
        $language->name = 'Laravel';

        $project->language()->save($language);
    }
}
