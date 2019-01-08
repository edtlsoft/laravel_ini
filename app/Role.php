<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filliable = [
    	'nombre', 'descripcion'
    ];


    public function permisos(){
    	return $this->belongsToMany(Permiso::class);
    }
}
