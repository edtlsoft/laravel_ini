<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $filliable = [
    	'nombre', 'descripcion'
    ];

    public function roles(){
    	return $this->belongsToMany(Role::class);
    }
}
