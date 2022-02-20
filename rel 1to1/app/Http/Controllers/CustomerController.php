<?php

namespace App\Http\Controllers;
use App\Mobile;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add_customer(){
        $mobile = new Mobile();
        $mobile->model = 'Samsung S21 Ultra';
        $customer = new Customer();
        $customer->name = 'Rohann Nagibb Tasin';
        $customer->save();
        $customer->mobile()->save($mobile);
    }
    public function show_mobile($id){
        $customer = Mobile::find($id)->customer;
        return $customer;
    }
}
