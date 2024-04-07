<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Usuarios
        Permission::create([
            'name' =>'Navegar usuarios',
            'slug' =>'users.index',
            'description' =>'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name' =>'Ver detalle de usuario',
            'slug' =>'users.show',
            'description' =>'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name' =>'Editar usuarios',
            'slug' =>'users.edit',
            'description' =>'Editar un usuario del sistema',
        ]);
        Permission::create([
            'name' =>'Eliminar usuarios',
            'slug' =>'users.destroy',
            'description' =>'Eliminar un usuario del sistema',
        ]);


        //Roles
        Permission::create([
            'name' =>'Crear rol',
            'slug' =>'roles.create',
            'description' =>'Crea un nuevo rol del sistema',
        ]);
        Permission::create([
            'name' =>'Navegar roles',
            'slug' =>'roles.index',
            'description' =>'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name' =>'Ver detalle de rol',
            'slug' =>'roles.show',
            'description' =>'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name' =>'Editar roles',
            'slug' =>'roles.edit',
            'description' =>'Editar un rol del sistema',
        ]);
        Permission::create([
            'name' =>'Eliminar roles',
            'slug' =>'roles.destroy',
            'description' =>'Eliminar un rol del sistema',
        ]);

        //Actividades
        Permission::create([
            'name' =>'Crear actividad',
            'slug' =>'actividades.create',
            'description' =>'Crea un nuevo actividad del sistema',
        ]);
        Permission::create([
            'name' =>'Navegar actividades',
            'slug' =>'actividades.index',
            'description' =>'Lista y navega todas las actividades del sistema',
        ]);
        Permission::create([
            'name' =>'Ver detalle de actividad',
            'slug' =>'actividades.show',
            'description' =>'Ver en detalle cada actividad del sistema',
        ]);
        Permission::create([
            'name' =>'Editar actividades',
            'slug' =>'actividades.edit',
            'description' =>'Editar una actividad del sistema',
        ]);
        Permission::create([
            'name' =>'Eliminar actividades',
            'slug' =>'actividades.destroy',
            'description' =>'Eliminar una actividad del sistema',
        ]);


        //Docentes
        Permission::create([
            'name' =>'Crear docente',
            'slug' =>'docentes.create',
            'description' =>'Crea un nuevo docente del sistema',
        ]);
        Permission::create([
            'name' =>'Navegar docentes',
            'slug' =>'docentes.index',
            'description' =>'Lista y navega todos los docentes del sistema',
        ]);
        Permission::create([
            'name' =>'Ver detalle de docente',
            'slug' =>'docentes.show',
            'description' =>'Ver en detalle cada docente del sistema',
        ]);
        Permission::create([
            'name' =>'Editar docentes',
            'slug' =>'docentes.edit',
            'description' =>'Editar un docente del sistema',
        ]);
        Permission::create([
            'name' =>'Eliminar docentes',
            'slug' =>'docentes.destroy',
            'description' =>'Eliminar un docente del sistema',
        ]);

        //Inscripciones
        Permission::create([
            'name' =>'Crear inscripcion',
            'slug' =>'inscripciones.create',
            'description' =>'Crea una nueva inscripcion del sistema',
        ]);
        Permission::create([
            'name' =>'Navegar inscripciones',
            'slug' =>'inscripciones.index',
            'description' =>'Lista y navega todas las inscripciones del sistema',
        ]);
        Permission::create([
            'name' =>'Ver detalle de inscripcion',
            'slug' =>'inscripciones.show',
            'description' =>'Ver en detalle cada inscripcion del sistema',
        ]);
        Permission::create([
            'name' =>'Editar inscripciones',
            'slug' =>'inscripciones.edit',
            'description' =>'Editar una inscripcion del sistema',
        ]);
        Permission::create([
            'name' =>'Eliminar inscripciones',
            'slug' =>'inscripciones.destroy',
            'description' =>'Eliminar una inscripcion del sistema',
        ]);
    }
}
