<?php

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
        $fechaactual = date("Y-m-d");
        DB::table('inscripciones')->insert([
            'fecha_inscripcion'=> $fechaactual,
            'user_id'=>'1',
            'actividades_id'=>'1',
        ]);

        $user = DB::table('users')->select('id')->first();
        $actividad = DB::table('actividades')->select('id')->first();

        //dd($user, $actividad);

        for($i=0;$i<10;$i++)
        {
            DB::table('inscripciones')->insert([
            'fecha_inscripcion'=> $fechaactual,
            'user_id'=>$user->id,
            'actividades_id'=> $actividad->id,
            ]);
        }


    }
}
