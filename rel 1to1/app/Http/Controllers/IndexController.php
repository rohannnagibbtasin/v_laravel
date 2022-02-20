<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobile;
use App\Customer;

class IndexController extends Controller
{
    public function index($id){
        $customer = Customer::find($id);
        dd($customer->mobile);
    }
}
