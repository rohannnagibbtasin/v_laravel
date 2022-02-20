<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Posts;

class AuthorController extends Controller
{
    public function add_author(){
        $author = new Author();
        $author->username='nodi';
        $author->password='nodi';
        $author->save();
    }
    public function show_author($id){
        $author = Posts::find($id)->author;
        return $author;
    }

}
