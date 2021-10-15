<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model
{
    protected $table = 'tipo_habitaciones';

    public function habitaciones(){
        return $this->hasMany(habitaciones::class);
    }
    
}
