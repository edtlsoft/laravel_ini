<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filliable = [
        'documento', 
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'genero',
        'cargo'
    ];


    public function user(){
    	return $this->hasOne(Role::class);
    }

    public function nombreCorto()
    {
        $nombres   = explode(' ', $this->nombres);
        $apellidos = explode(' ', $this->apellidos);

        return($nombres[0] .' '. $apellidos[0]);
    }

}
