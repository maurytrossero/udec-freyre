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

        //generados por chatgpt
        DB::table('tipos_actividades')->insert([
            'nombre' => 'Talleres Artesanales',
            'descripcion' => 'Sumérgete en la artesanía y desarrolla habilidades creativas en técnicas y materiales, explorando belleza y expresión artística.',
        ]);
        
        DB::table('tipos_actividades')->insert([
            'nombre' => 'Talleres Musicales',
            'descripcion' => 'Explora tu pasión por la música y mejora habilidades musicales en una variedad de géneros y estilos, participando en clases, ensayos y presentaciones.',
        ]);
        
        DB::table('tipos_actividades')->insert([
            'nombre' => 'Talleres de idiomas',
            'descripcion' => 'Sumérgete en el mundo de los idiomas y expande horizontes lingüísticos aprendiendo nuevos idiomas y culturas, participando en clases interactivas y actividades prácticas.',
        ]);
        
        DB::table('tipos_actividades')->insert([
            'nombre' => 'Elencos',
            'descripcion' => 'Únete a un elenco teatral y vive la emoción de la actuación, explorando personajes, escenas y diálogos en un ambiente creativo y colaborativo.',
        ]);
        
        DB::table('tipos_actividades')->insert([
            'nombre' => 'Cursos',
            'descripcion' => 'Amplía conocimientos y desarrolla habilidades en una variedad de temas y disciplinas, participando en cursos especializados para alcanzar metas personales y profesionales.',
        ]);
        
        DB::table('tipos_actividades')->insert([
            'nombre' => 'Capacitaciones',
            'descripcion' => 'Mejora habilidades laborales y profesionales participando en programas de capacitación práctica y teórica para desarrollar competencias específicas y aumentar empleabilidad.',
        ]);
        
        
    }
}
