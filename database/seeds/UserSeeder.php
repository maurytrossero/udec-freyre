<?php

use App\User;
use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

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

        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' => 'all-access',
            'description' => 'Rol Administrador',
        ]);

        Role::create([
            'name' => 'Alumno',
            'slug' => 'alumno',
            'description' => 'Rol Alumno',
        ]);

        Role::create([
            'name' => 'Docente',
            'slug' => 'docente',
            'description' => 'Rol Docente',
        ]);

        $rol_user = Role::where('name','Alumno')->first();
        $user = new User();
        $user->name = "Mauricio Trossero";
        $user->email = "maurytrossero@gmail.com";
        $user->password = bcrypt('m36001479');
        $user->dni = "36001479";
        $user->direccion = "San Martin 928";
        $user->telefono = "3564607490";
        $user->save();
        $user->roles()->attach($rol_user);


        $rol_user = Role::where('name','Admin')->first();
        $user = new User();
        $user->name = "Administrador";
        $user->email = "administrador@admin.com";
        $user->password = bcrypt('m36001479');
        $user->dni = "36001479";
        $user->direccion = "";
        $user->telefono = "3564607490";
        $user->save();
        $user->roles()->attach($rol_user);

        $rol_user = Role::where('name','Alumno')->first();
        $user = new User();
        $user->name = "MT Producciones";
        $user->email = "mtproduccioneshd@gmail.com";
        $user->password = bcrypt('m36001479');
        $user->dni = "36001479";
        $user->direccion = "";
        $user->telefono = "3564607490";
        $user->save();
        $user->roles()->attach($rol_user);

        $rol_user = Role::where('name','Admin')->first();
        $user = new User();
        $user->name = "Emiliano Gorgerino";
        $user->email = "emilianogorgerino@gmail.com";
        $user->password = bcrypt('m36001479');
        $user->dni = "36001479";
        $user->direccion = "";
        $user->telefono = "3564607490";
        $user->save();
        $user->roles()->attach($rol_user);

    }
}
