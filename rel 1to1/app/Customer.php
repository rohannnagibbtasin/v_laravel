<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function mobile(){
        return $this->hasOne(Mobile::class);
    }
}
