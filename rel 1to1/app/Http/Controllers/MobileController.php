<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobile;
use App\Customer;

class MobileController extends Controller
{
    public function show_customer($id){
        $customer = Mobile::find($id)->customer;
        return $customer;
    }
}
