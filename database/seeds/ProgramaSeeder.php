<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Programas Culturales
        DB::table('programas')->insert([
            'nombre'=>'Museo Virtual del Deporte',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Legados',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Historias de mascotas',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Historias de motoqueros',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Lazos saludables',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Freyre Suena',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Freyre Escribe',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Freyre Canta',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Freyre Colorido',
            'descripcion'=>'',
        ]);



        //Programas educativos
        DB::table('programas')->insert([
            'nombre'=>'Coordinación en secundario para adultos',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Boleto Educativo Gratuito',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Apoyo Escolar',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Becas',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Practicas Estudiantiles',
            'descripcion'=>'',
        ]);


        //Programas Laborales
        DB::table('programas')->insert([
            'nombre'=>'PPP',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Xmi',
            'descripcion'=>'',
        ]);

        DB::table('programas')->insert([
            'nombre'=>'Pila',
            'descripcion'=>'',
        ]);
    }
}
