<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Tasin extends Controller
{
    public function show(){
        $students = DB::select('select * from student');
        return view('home');
    }
}
