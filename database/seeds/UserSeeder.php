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
            'name'=>'Veronica Sayago',
            'email'=>'veronicasayago@gmail.com',
            'password'=> bcrypt('v12345678'),
            'DNI'=>'36785478',
            'direccion'=>'Gral. Mitre 248',
            'telefono'=>'3564359758',
        ]);

        factory(User::class,50)->create();

    }
}
