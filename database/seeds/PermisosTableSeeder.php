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
        $permiso->ruta = 'all';
        $permiso->save();
        //$permiso->roles()->attach(1);

        $permiso2 = new App\Permiso();
        $permiso2->nombre = 'dashboard_1';
        $permiso2->descripcion = 'El permiso de dashboard_1 tendra acceso a la vista dashboard del sistema del sistema.';
        $permiso2->ruta = 'dashboard';
        $permiso2->save();
        //$permiso2->roles()->attach(2);

        $permiso3 = new App\Permiso();
        $permiso3->nombre = 'referencia_1';
        $permiso3->descripcion = 'El permiso de referencia_1 tendra acceso a la vista del formulario registrar referencia y podra registrar referencias.';
        $permiso3->ruta = 'referencia.create';
        $permiso3->save();
        //$permiso3->roles()->attach(3);
    }
}
