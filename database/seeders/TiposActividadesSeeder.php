<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_actividades')->insert([
            'nombre' => 'Talleres Artesanales',
            'descripcion' => 'Talleres de duración anual',
        ]);

        DB::table('tipos_actividades')->insert([
            'nombre' => 'Talleres Musicales',
            'descripcion' => 'Talleres de duración anual orientados a la música',
        ]);

        DB::table('tipos_actividades')->insert([
            'nombre' => 'Talleres de idiomas',
            'descripcion' => 'Talleres de duración anual orientados a diversos idiomas',
        ]);
        DB::table('tipos_actividades')->insert([
            'nombre' => 'Elencos',
            'descripcion' => 'Elencos de duración anual',
        ]);

        DB::table('tipos_actividades')->insert([
            'nombre' => 'Cursos',
            'descripcion' => 'Talleres de duración de 3 a 4 meses aproximadamente',
        ]);

        DB::table('tipos_actividades')->insert([
            'nombre' => 'Capacitaciones',
            'descripcion' => 'Capacitaciones de duración de 3 a 4 meses aproximadamente',
        ]);
    }
}
