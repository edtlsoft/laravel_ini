<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new App\Role();
        $role->nombre = 'Super Administrador';
        $role->descripcion = 'El rol de super administrador tendra todos los permisos del sistema, incluso mas permisos que el administrador';
        $role->save();

        $role2 = new App\Role();
        $role2->nombre = 'Administrador';
        $role2->descripcion = 'El rol de administrador tendra gran parte o todos los permisos del sistema';
        $role2->save();

        $role3 = new App\Role();
        $role3->nombre = 'Default';
        $role3->descripcion = 'El rol default es el rol con los permisos mas bascos del sistema del sistema';
        $role3->save();
    }
}
