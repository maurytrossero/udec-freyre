<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docentes')->insert([
            'nombre'=>'Pedro Alvarez',
            'dni'=>'24785478',
            'direccion'=>'25 de mayo 787',
            'telefono'=>'3562515307',
        ]);

        DB::table('docentes')->insert([
            'nombre'=>'Esteban Quito',
            'dni'=>'544558',
            'direccion'=>'9 de julio 32',
            'telefono'=>'3562515307',
        ]);

        DB::table('docentes')->insert([
            'nombre'=>'Juana Garcia',
            'dni'=>'745624',
            'direccion'=>'San Martin s/n',
            'telefono'=>'78452147',
        ]);

        //factory(\App\Docente::class,5)->create();
    }
}
