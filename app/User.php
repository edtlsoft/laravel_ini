<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role(){
        return $this->belongsTo(Role::class);
    }

    
    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }


    /**
     * Verificar si el usuarios tiene los permisos requeridos para realizar una a accion
     */
    public function isAuthorized($permisos, $frontend=null){
        $permisos = $this->addPermisosForDefault($permisos);

        if( $this->hasAnyPermiso($permisos) ){
            return true;
        }

        return $frontend ? false : abort(401, 'No tiene permisos para realizar esta acción, si cree que pueda ser un error del sistema comuníquese con el administrador.');
    }

    public function addPermisosForDefault($permisos){
        if( is_array($permisos) ){
            array_unshift($permisos, 'super_administrador');
        } else {
            $permisos = ['super_administrador', $permisos];
        }

        return $permisos;
    }

    public function hasAnyPermiso($permisos){
        if( is_array($permisos) ){
            foreach( $permisos as $permiso ){
                if( $this->hasPermiso($permiso) ){
                    return true;
                }
            }
        }

        return false;
    }

    public function hasPermiso($permiso){
        if( $this->role->permisos()->where('nombre', $permiso)->first() ){
            return true;
        }

        return false;
    }


    public function getRoutesAuthorized(){
        $routes   = [];
        $permisos = $this->role->permisos;

        foreach( $permisos as $permiso ){
            array_push($routes, $permiso->ruta);
        }

        return $routes;
    }


}
