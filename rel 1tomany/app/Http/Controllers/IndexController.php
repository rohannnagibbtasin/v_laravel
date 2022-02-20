<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Posts;

class IndexController extends Controller
{
    public function index($id){
        $author = Author::find($id);
        dd($author->posts);
    }
}
