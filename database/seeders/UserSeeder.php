<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = new User();
        $user->name = "Mauricio Trossero";
        $user->email = "maurytrossero@gmail.com";
        $user->password = bcrypt('m36001479');
        $user->dni = "36001479";
        $user->direccion = "San Martin 928";
        $user->telefono = "3564607490";
        $user->save();
        $user->assignRole('Docente');


        $user = new User();
        $user->name = "Administrador";
        $user->email = "administrador@admin.com";
        $user->password = bcrypt('m36001479');
        $user->dni = "36001479";
        $user->direccion = "";
        $user->telefono = "3564607490";
        $user->save();
        $user->assignRole('Admin');

        $user = new User();
        $user->name = "MT Producciones";
        $user->email = "mtproduccioneshd@gmail.com";
        $user->password = bcrypt('m36001479');
        $user->dni = "36001479";
        $user->direccion = "";
        $user->telefono = "3564607490";
        $user->save();
        $user->assignRole('Alumno');

        $user = new User();
        $user->name = "Emiliano Gorgerino";
        $user->email = "emilianogorgerino@gmail.com";
        $user->password = bcrypt('m36001479');
        $user->dni = "36001479";
        $user->direccion = "";
        $user->telefono = "3564607490";
        $user->save();
        $user->assignRole('Admin');
    }
}




