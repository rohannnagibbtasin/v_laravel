<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Author;
class PostsController extends Controller
{
    public function add_post($id){
        $author = Author::find($id);
        $post = new Posts();
        $post->title = 'Programming ';
        $post->cat = 'pro';
        $post->author_id = $author;
        $author->posts()->save($post);
    }

    //get post based on author id
    public function show_post($id){
        $post = Author::find($id)->posts;
        return $post;
    }
}
