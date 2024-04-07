<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Programas Culturales
        DB::table('programas')->insert([
            'nombre' => 'Museo Virtual del Deporte',
            'descripcion' => 'Descripción del Museo Virtual del Deporte',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Legados',
            'descripcion' => 'Descripción de Legados',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Historias de mascotas',
            'descripcion' => 'Descripción de Historias de mascotas',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Historias de motoqueros',
            'descripcion' => 'Descripción de Historias de motoqueros',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Lazos saludables',
            'descripcion' => 'Descripción de Lazos saludables',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Freyre Suena',
            'descripcion' => 'Descripción de Freyre Suena',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Freyre Escribe',
            'descripcion' => 'Descripción de Freyre Escribe',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Freyre Canta',
            'descripcion' => 'Descripción de Freyre Canta',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Freyre Colorido',
            'descripcion' => 'Descripción de Freyre Colorido',
        ]);

        // Programas Educativos
        DB::table('programas')->insert([
            'nombre' => 'Coordinación en secundario para adultos',
            'descripcion' => 'Descripción de Coordinación en secundario para adultos',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Boleto Educativo Gratuito',
            'descripcion' => 'Descripción de Boleto Educativo Gratuito',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Apoyo Escolar',
            'descripcion' => 'Descripción de Apoyo Escolar',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Becas',
            'descripcion' => 'Descripción de Becas',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Practicas Estudiantiles',
            'descripcion' => 'Descripción de Prácticas Estudiantiles',
        ]);

        // Programas Laborales
        DB::table('programas')->insert([
            'nombre' => 'PPP',
            'descripcion' => 'Descripción de PPP',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Xmi',
            'descripcion' => 'Descripción de Xmi',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Pila',
            'descripcion' => 'Descripción de Pila',
        ]);
    }
}
