<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create([
            'name' => 'Admin',
        ]);

        $role2 = Role::create([
            'name' => 'Alumno',
        ]);

        $role3 = Role::create([
            'name' => 'Docente',
        ]);


        //Usuarios
        Permission::create(['name' => 'users.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.show'])->syncRoles([$role1]);
        Permission::create(['name' => 'users.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'users.destroy'])->syncRoles([$role1]);
        
        //perfil
        Permission::create(['name' => 'users.perfil-edit'])->syncRoles([$role1,$role2, $role3]);
        Permission::create(['name' => 'users.perfil-update'])->syncRoles([$role1,$role2, $role3]);
        Permission::create(['name' => 'users.perfil-show'])->syncRoles([$role1,$role2, $role3]);
        
        //Roles
        Permission::create(['name' => 'roles.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.show'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.destroy'])->syncRoles([$role1]);

        //Actividades
        Permission::create(['name' => 'actividades.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'actividades.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'actividades.show'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'actividades.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'actividades.destroy'])->syncRoles([$role1]);
        

        //Programas
        Permission::create(['name' => 'programas.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'programas.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'programas.show'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'programas.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'programas.destroy'])->syncRoles([$role1]);

        //Puntos de encuentro
        Permission::create(['name' => 'puntosdeencuentros.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'puntosdeencuentros.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'puntosdeencuentros.show'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'puntosdeencuentros.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'puntosdeencuentros.destroy'])->syncRoles([$role1]);


        //Docentes
        Permission::create(['name' => 'docentes.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'docentes.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'docentes.show'])->syncRoles([$role1]);
        Permission::create(['name' => 'docentes.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'docentes.destroy'])->syncRoles([$role1]);
        

        //Inscripciones
        Permission::create(['name' => 'inscripciones.create'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'inscripciones.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'inscripciones.show'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'inscripciones.edit'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'inscripciones.destroy'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'inscripciones.confirmar'])->syncRoles([$role1, $role2, $role3]);
      
    }
}
