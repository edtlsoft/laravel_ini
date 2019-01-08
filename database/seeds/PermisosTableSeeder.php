<?php

use Illuminate\Database\Seeder;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permiso = new App\Permiso();
        $permiso->nombre = 'super_administrador';
        $permiso->descripcion = 'El permiso de super administrador tendra acceso a todos los componentes del sistema.';
        $permiso->save();
        $permiso->roles()->attach(1);

        $permiso2 = new App\Permiso();
        $permiso2->nombre = 'administrador';
        $permiso2->descripcion = 'El permiso de administrador tendra acceso a gran parte de los componentes del sistema.';
        $permiso2->save();
        $permiso->roles()->attach(2);

        $permiso3 = new App\Permiso();
        $permiso3->nombre = 'basico';
        $permiso3->descripcion = 'El permiso basico solo tendra acceso al dashboard del sistema del sistema.';
        $permiso3->save();
        $permiso->roles()->attach(3);
    }
}
