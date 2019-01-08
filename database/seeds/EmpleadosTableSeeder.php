<?php

use Illuminate\Database\Seeder;

use App\Empleado;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleado = new Empleado();
        $empleado->documento = '1090462645';
        $empleado->nombres   = 'Edward';
        $empleado->apellidos = 'Trigos Lopez';
        $empleado->fecha_nacimiento = '1993-04-28';
        $empleado->genero = 'M';
        $empleado->cargo = 'Programador Web';
        $empleado->save();

        $empleado2 = new Empleado();
        $empleado2->documento = '10904626451';
        $empleado2->nombres   = 'Edward2';
        $empleado2->apellidos = 'Trigos Lopez';
        $empleado2->fecha_nacimiento = '1993-04-28';
        $empleado2->genero = 'M';
        $empleado2->cargo = 'Programador';
        $empleado2->save();
    }
}
