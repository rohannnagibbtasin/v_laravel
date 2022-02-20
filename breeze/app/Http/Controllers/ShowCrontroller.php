<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ShowCrontroller extends Controller
{
    public function show_auth(){
        return Auth::user();
    }
    public function check_auth(){
        if(Auth::check()){
            return 'ok';
        }
        return 'no';
    }
}
