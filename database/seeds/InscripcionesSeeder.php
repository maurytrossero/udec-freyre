<?php

use App\Inscripcion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InscripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $fechaactual = date("Y-m-d");
        DB::table('inscripciones')->insert([
            'fecha_inscripcion'=> $fechaactual,
            'user_id'=>'1',
            'actividades_id'=>'1',
        ]);


        for($i=0;$i<100;$i++)
        {
            DB::table('inscripciones')->insert([
                'fecha_inscripcion'=> $fechaactual,
                'user_id'=> random_int(1,50),
                'actividades_id'=>random_int(1,6),
            ]);
        }
*/

    }
}
