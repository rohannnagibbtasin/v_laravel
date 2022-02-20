<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasin extends Controller
{
    function show(){
        return view('tasin',['name'=>'Tasin']);
    }
}
