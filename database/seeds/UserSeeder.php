<?php

use App\User;
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

        User::create([
            'name'=>'Mauricio Trossero',
            'email'=>'maurytrossero@gmail.com',
            'password'=>bcrypt('m36001479'),
            'DNI'=>'36001479',
            'direccion'=>'San Martin 928',
            'telefono'=>'3564607490',
        ]);

        User::create([
            'name'=>'Juan Perez',
            'email'=>'juanperez@gmail.com',
            'password'=> bcrypt('v12345678'),
            'DNI'=>'36785478',
            'direccion'=>'Gral. Mitre 248',
            'telefono'=>'3011439758',
        ]);

        User::create([
            'name'=>'Juan de los palotes',
            'email'=>'juandelospalotes@gmail.com',
            'password'=> bcrypt('v12345678'),
            'DNI'=>'36785478',
            'direccion'=>'Muy lejos 987',
            'telefono'=>'3011439758',
        ]);

        User::create([
            'name'=>'Perdro gonzalez',
            'email'=>'pedrogonzalez@gmail.com',
            'password'=> bcrypt('v12345678'),
            'DNI'=>'36785478',
            'direccion'=>'calle ancha 785',
            'telefono'=>'3011439758',
        ]);

        User::create([
            'name'=>'Jesica Sanchez',
            'email'=>'jesicasanchez@gmail.com',
            'password'=> bcrypt('v12345678'),
            'DNI'=>'36785478',
            'direccion'=>'Muy cerca 147',
            'telefono'=>'3011439758',
        ]);

        User::create([
            'name'=>'Jeny Fernandez',
            'email'=>'jenifernandez@gmail.com',
            'password'=> bcrypt('v12345678'),
            'DNI'=>'36785478',
            'direccion'=>'Calle sin numero',
            'telefono'=>'3011439758',
        ]);

        //factory(User::class,50)->create();

    }
}
