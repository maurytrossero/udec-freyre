<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Talleres Artesanales
        DB::table('actividades')->insert([
        'nombre'=>'Fotografía',
        'descripcion'=>'Taller básico de fotografía, donde se enseñan los conocimientos básicos para el manejo de la cámara',
        'fecha_inicio'=>'2019-04-06',
        'fecha_finalizacion'=>'2019-11-27',
        'costo_mensual'=>'500',
        'dia_cursado'=>'Miércoles',
        'horario'=>'14:00',
        'estado_inscripcion'=>'abierta',
        'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Caricatura',
            'descripcion'=>'Taller básico para aprender a dibujar caricaturas',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Cerámica',
            'descripcion'=>'Taller básico para aprender cerámica',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Costura',
            'descripcion'=>'Taller básico para aprender costura',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Mosaiquismo',
            'descripcion'=>'Taller básico para aprender mosaiquismo',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Pintura',
            'descripcion'=>'Taller básico para aprender pintura',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Tapiz',
            'descripcion'=>'Taller básico para aprender tapiz',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Tejido',
            'descripcion'=>'Taller básico para aprender tejido',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Ajedrez',
            'descripcion'=>'Taller básico para aprender ajedrez',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Cocina',
            'descripcion'=>'Taller básico para aprender cocina',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Pirograbados',
            'descripcion'=>'Taller básico para aprender pirograbados',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Caricatura',
            'descripcion'=>'Taller básico para aprender a dibujar caricaturas',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '1',
        ]);
        //Talleres Musicales
        DB::table('actividades')->insert([
            'nombre'=>'Batería',
            'descripcion'=>'Taller básico de bateria',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Canto',
            'descripcion'=>'Taller básico de canto',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Solista',
            'descripcion'=>'Taller básico de Solista',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Canto Coral',
            'descripcion'=>'Taller básico de canto coral',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Folclore',
            'descripcion'=>'Taller básico de folclore',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Malambo',
            'descripcion'=>'Taller básico de Malambo',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Percusión',
            'descripcion'=>'Taller básico de percusión',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Piano',
            'descripcion'=>'Taller básico de piano',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Guitarra',
            'descripcion'=>'Taller básico de guitarra',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '2',
        ]);

        //Talleres de Idiomas
        DB::table('actividades')->insert([
            'nombre'=>'Inglés',
            'descripcion'=>'Taller básico de inglés',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '3',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Francés',
            'descripcion'=>'Taller básico de francés',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '3',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Italiano',
            'descripcion'=>'Taller básico de italiano',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '3',
        ]);

        //Elencos
        DB::table('actividades')->insert([
            'nombre'=>'Ballet “Inti Huaira”',
            'descripcion'=>'Elenco destinado a Ballet “Inti Huaira”',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '4',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Coro de niños',
            'descripcion'=>'Elenco destinado al Coro de niños',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '4',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Coro Polifónico',
            'descripcion'=>'Elenco destinado al Coro Polifónico',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '4',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Coro Ítalo Piemontés',
            'descripcion'=>'Elenco destinado al Coro Ítalo Piemontés',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '4',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Los Dueños del Reloj',
            'descripcion'=>'Elenco destinado al grupo musical Los Dueños del Reloj',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '4',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Las Estrellas',
            'descripcion'=>'Elenco destinado al grupo musical Las estrellas',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '4',
        ]);

        //Cursos
        DB::table('actividades')->insert([
            'nombre'=>'Agronegocios',
            'descripcion'=>'Curso con orientanción en Agronegocios',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Enfermería',
            'descripcion'=>'Curso con orientación en enfermería',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Comercio Exterior',
            'descripcion'=>'Curso con orientación en Comercio Exterior',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Coaching',
            'descripcion'=>'Curso con orientación en Coaching',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Excel',
            'descripcion'=>'Curso con orientación en Excel',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Gestión Administrativa',
            'descripcion'=>'Curso con orientación en Gestión Administrativa',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Grafología',
            'descripcion'=>'Curso con orientación en grafología',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Marketing digital',
            'descripcion'=>'Curso con orientación en Marketing Digital',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Oratoria',
            'descripcion'=>'Curso con orientación en Oratoria',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Inglés para el Viajero',
            'descripcion'=>'Curso con orientación en Inglés para el viajero',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Comprensión lectora',
            'descripcion'=>'Curso con orientación en Comprensión lectora',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Organización del tiempo',
            'descripcion'=>'Curso con orientación en Organización del tiempo',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Lengua de señas',
            'descripcion'=>'Curso con orientación en Lengua de Señas',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '5',
        ]);

        //Capacitaciones
        DB::table('actividades')->insert([
            'nombre'=>'Computación para adultos',
            'descripcion'=>'Capacitación con orientación en Computación para adultos',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '6',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Gestión Bancaria e impositiva',
            'descripcion'=>'Capacitación con orientación en Gestión Bancaria e Impositiva',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '6',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Liquidación de Sueldos y Jornales',
            'descripcion'=>'Capacitación con orientación en Liquidación de Sueldos y Jornales',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '6',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Costura Industrial',
            'descripcion'=>'Capacitación con orientación en Costura Industrial',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '6',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Gasista',
            'descripcion'=>'Capacitación con orientación en Gasista',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '6',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Conexión de Redes Eléctricas',
            'descripcion'=>'Capacitación con orientación en Conexion de redes eléctricas',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '6',
        ]);
    }
}
