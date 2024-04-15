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
            'nombre' => 'Ballet de Folclore en Festival de Cosquín',
            'descripcion' => 'Presentación del Ballet de Folclore en el Festival de Cosquín.',
            'fecha_realización' => '2024-04-06',
        ]);
        
        DB::table('puntos_de_encuentros')->insert([
            'nombre' => 'Apertura Udec',
            'descripcion' => 'Evento de apertura de la UDEC.',
            'fecha_realización' => '2024-04-06',
        ]);
        
        DB::table('puntos_de_encuentros')->insert([
            'nombre' => 'Muestra en Museo y Archivo Histórico',
            'descripcion' => 'Exhibición especial en el Museo y Archivo Histórico de Freyre.',
            'fecha_realización' => '2024-04-06',
        ]);
        
        DB::table('puntos_de_encuentros')->insert([
            'nombre' => 'Encuentro nacional de Canaricultura',
            'descripcion' => 'Reunión anual de criadores de canarios de todo el país.',
            'fecha_realización' => '2024-04-06',
        ]);
        
        DB::table('puntos_de_encuentros')->insert([
            'nombre' => 'Malvinas',
            'descripcion' => 'Conmemoración del Día de las Islas Malvinas.',
            'fecha_realización' => '2024-04-06',
        ]);
        
        DB::table('puntos_de_encuentros')->insert([
            'nombre' => 'Femicidio (charla-taller)',
            'descripcion' => 'Taller de concientización y prevención sobre el femicidio.',
            'fecha_realización' => '2024-04-06',
        ]);
        
        DB::table('puntos_de_encuentros')->insert([
            'nombre' => 'Festival Quiero Freyre',
            'descripcion' => 'Celebración anual con actividades culturales y recreativas en la localidad de Freyre.',
            'fecha_realización' => '2024-04-06',
        ]);
        
        DB::table('puntos_de_encuentros')->insert([
            'nombre' => 'Acto 25 de Mayo',
            'descripcion' => 'Conmemoración del Día de la Revolución de Mayo.',
            'fecha_realización' => '2024-04-06',
        ]);
        
        DB::table('puntos_de_encuentros')->insert([
            'nombre' => 'Hermanamiento Freyre- Barge',
            'descripcion' => 'Evento oficial de hermanamiento entre las ciudades de Freyre y Barge.',
            'fecha_realización' => '2024-04-06',
        ]);
        
        DB::table('puntos_de_encuentros')->insert([
            'nombre' => 'Día de Jardines de Infantes',
            'descripcion' => 'Celebración del Día de los Jardines de Infantes con actividades para niños.',
            'fecha_realización' => '2024-04-06',
        ]);
        
        DB::table('puntos_de_encuentros')->insert([
            'nombre' => 'Encuentro de Coros Italos-Piemonteses',
            'descripcion' => 'Reunión de coros italianos y piemonteses para compartir repertorio y tradiciones.',
            'fecha_realización' => '2024-04-06',
        ]);
        
    }
}
