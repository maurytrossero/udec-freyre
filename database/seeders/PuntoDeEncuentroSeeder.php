<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuntoDeEncuentroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puntos_de_encuentros')->insert([
            'nombre'=>'Ballet de Folclore en Festival de Cosquín',
            'descripcion'=>'',
            'fecha_realización' => '2019-04-06',
        ]);

        DB::table('puntos_de_encuentros')->insert([
            'nombre'=>'Apertura Udec',
            'descripcion'=>'',
            'fecha_realización' => '2019-04-06',
        ]);

        DB::table('puntos_de_encuentros')->insert([
            'nombre'=>'Muestra en Museo y Archivo Histórico',
            'descripcion'=>'',
            'fecha_realización' => '2019-04-06',
        ]);

        DB::table('puntos_de_encuentros')->insert([
            'nombre'=>'Encuentro nacional de Canaricultura',
            'descripcion'=>'',
            'fecha_realización' => '2019-04-06',
        ]);

        DB::table('puntos_de_encuentros')->insert([
            'nombre'=>'Malvinas',
            'descripcion'=>'',
            'fecha_realización' => '2019-04-06',
        ]);

        DB::table('puntos_de_encuentros')->insert([
            'nombre'=>'Femicidio (charla-taller)',
            'descripcion'=>'',
            'fecha_realización' => '2019-04-06',
        ]);

        DB::table('puntos_de_encuentros')->insert([
            'nombre'=>'Festival Quiero Freyre',
            'descripcion'=>'',
            'fecha_realización' => '2019-04-06',
        ]);

        DB::table('puntos_de_encuentros')->insert([
            'nombre'=>'Acto 25 de Mayo',
            'descripcion'=>'',
            'fecha_realización' => '2019-04-06',
        ]);

        DB::table('puntos_de_encuentros')->insert([
            'nombre'=>'Hermanamiento Freyre- Barge',
            'descripcion'=>'',
            'fecha_realización' => '2019-04-06',
        ]);

        DB::table('puntos_de_encuentros')->insert([
            'nombre'=>'Día de Jardines de Infantes',
            'descripcion'=>'',
            'fecha_realización' => '2019-04-06',
        ]);

        DB::table('puntos_de_encuentros')->insert([
            'nombre'=>'Encuentro de Coros Italos-Piemonteses',
            'descripcion'=>'',
            'fecha_realización' => '2019-04-06',
        ]);
    }
}
