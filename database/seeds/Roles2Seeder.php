<?php

use App\Rol2;
use Illuminate\Database\Seeder;

class Roles2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol2::create([
            'nombre_rol'=>'alumno',
        ]);
        Rol2::create([
            'nombre_rol'=>'docente',
        ]);
        Rol2::create([
            'nombre_rol'=>'administrador',
        ]);
    }
}
