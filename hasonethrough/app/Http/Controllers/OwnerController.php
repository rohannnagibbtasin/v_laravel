<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Owner;
class OwnerController extends Controller
{
    public function add_owner($id){
        $car = Car::find($id);
        $owner = new Owner();
        $owner->name = 'Tasin';
        $car->owner()->save($owner);
    }
    public function show_owner($id){
        $owner = Mechanic::find($id)->owner;
        return $owner;
    }
}
