<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('actividades')->insert([
        'nombre'=>'Fotografía',
        'descripcion'=>'Taller basico de fotografía, donde se enseñan los conocimientos basicos para el manejo de la camara',
        'fecha_inicio'=>'2019-04-06',
        'tipo_actividad'=>'taller',
        'fecha_finalizacion'=>'2019-11-27',
        'costo_mensual'=>'500',
        'dia_cursado'=>'Miércoles',
        'horario'=>'14:00',
        'estado_inscripcion'=>'cerrada',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Canto',
            'descripcion'=>'Taller basico de canto',
            'fecha_inicio'=>'2019-04-06',
            'tipo_actividad'=>'taller',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Caricatura',
            'descripcion'=>'Taller basico para aprender a dibujar caricaturas',
            'fecha_inicio'=>'2019-04-06',
            'tipo_actividad'=>'taller',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
        ]);
    }
}
