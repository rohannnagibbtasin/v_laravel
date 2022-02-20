<?php

namespace App\Models;
use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public function owner(){
        return $this->hasOne(Owner::class);
    }
}
