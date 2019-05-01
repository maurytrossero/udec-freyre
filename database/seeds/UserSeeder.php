<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Mauricio Trossero',
            'email'=>'maurytrossero@gmail.com',
            'password'=>bcrypt('m36001479'),
            'DNI'=>'36001479',
            'dirección'=>'San Martin 928',
            'telefono'=>'3564607490',
        ]);

        DB::table('users')->insert([
            'name'=>'Veronica Sayago',
            'email'=>'veronicasayago@gmail.com',
            'password'=> bcrypt('v12345678'),
            'DNI'=>'36785478',
            'dirección'=>'Gral. Mitre 248',
            'telefono'=>'3564359758',
        ]);
    }
}
