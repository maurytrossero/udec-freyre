<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Rol2;

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
