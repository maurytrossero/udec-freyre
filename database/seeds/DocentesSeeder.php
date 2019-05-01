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
            'nombre'=>'Bibiana Luque',
            'DNI'=>'24785478',
            'dirección'=>'25 de mayo 787, Morteros',
            'telefono'=>'3562515307',
        ]);
    }
}
