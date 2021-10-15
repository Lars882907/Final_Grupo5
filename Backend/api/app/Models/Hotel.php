<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hoteles';

    public function habitaciones(){
        return $this->hasMany(habitaciones::class);
    }
}
