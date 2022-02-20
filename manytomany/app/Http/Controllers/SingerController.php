<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Singer;
class SingerController extends Controller
{
    public function add_singer(){
        $singer = new Singer();
        $singer->name = 'Justin';
        $singer->save();
        $songid = [1];
        $singer->songs()->attach($songid);
    }
    public function show_singer($id){
        $singer = Song::find($id)->singers;
        return $singer;
    }
}
