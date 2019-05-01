<?php

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
        'descripcion'=>'Taller basico de fotografía, donde se enseñan los conocimientos basicos para el manejo de la camara',
        'fecha_inicio'=>'2019-04-06',
        'fecha_finalizacion'=>'2019-11-27',
        'costo_mensual'=>'500',
        'dia_cursado'=>'Miércoles',
        'horario'=>'14:00',
        'estado_inscripcion'=>'cerrada',
        'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Caricatura',
            'descripcion'=>'Taller basico para aprender a dibujar caricaturas',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Caricatura',
            'descripcion'=>'Taller basico para aprender a dibujar caricaturas',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '1',
        ]);
        DB::table('actividades')->insert([
            'nombre'=>'Cerámica',
            'descripcion'=>'Taller basico para aprender cerḿica',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Costura',
            'descripcion'=>'Taller basico para aprender costura',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Mosaiquismo',
            'descripcion'=>'Taller basico para aprender mosaiquismo',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Pintura',
            'descripcion'=>'Taller basico para aprender pintura',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Tapiz',
            'descripcion'=>'Taller basico para aprender tapiz',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Caricatura',
            'descripcion'=>'Taller basico para aprender a dibujar caricaturas',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Tejido',
            'descripcion'=>'Taller basico para aprender tejido',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Ajedrez',
            'descripcion'=>'Taller basico para aprender ajedrez',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Cocina',
            'descripcion'=>'Taller basico para aprender cocina',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Pirograbados',
            'descripcion'=>'Taller basico para aprender pirograbados',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '1',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Caricatura',
            'descripcion'=>'Taller basico para aprender a dibujar caricaturas',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '1',
        ]);
        //Talleres Musicales
        DB::table('actividades')->insert([
            'nombre'=>'Batería',
            'descripcion'=>'Taller basico de bateria',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Canto',
            'descripcion'=>'Taller basico de canto',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Solista',
            'descripcion'=>'Taller basico de Solista',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Canto Coral',
            'descripcion'=>'Taller basico de canto coral',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Folclore',
            'descripcion'=>'Taller basico de folclore',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Malambo',
            'descripcion'=>'Taller basico de Malambo',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Percusión',
            'descripcion'=>'Taller basico de percusión',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Piano',
            'descripcion'=>'Taller basico de piano',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '2',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Guitarra',
            'descripcion'=>'Taller basico de guitarra',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '2',
        ]);

        //Talleres de Idiomas
        DB::table('actividades')->insert([
            'nombre'=>'Ingles',
            'descripcion'=>'Taller basico de ingles',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '3',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Frances',
            'descripcion'=>'Taller basico de francés',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '3',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Italiano',
            'descripcion'=>'Taller basico de italiano',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '4',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Coro polifonico',
            'descripcion'=>'Elenco destinado al coro polifónico',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '4',
        ]);

        //Cursos
        DB::table('actividades')->insert([
            'nombre'=>'Agronegocios',
            'descripcion'=>'Curso con orientancion en agronegocios',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Enfermeria',
            'descripcion'=>'Curso con orientación en enfermeria',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Curso Exterior',
            'descripcion'=>'Curso con orientación en Comercio Exterior',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Gestión administrativa',
            'descripcion'=>'Curso con orientación en Gestión Administrativa',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Marketing digital',
            'descripcion'=>'Curso con orientación en Marketing digital',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '5',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Inglés para el viajero',
            'descripcion'=>'Curso con orientación en Inglés para el viajero',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
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
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '6',
        ]);

        DB::table('actividades')->insert([
            'nombre'=>'Conexión de redes electricas',
            'descripcion'=>'Capacitación con orientación en Conexion de redes eléctricas',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'cerrada',
            'tipo_actividad_id' => '6',
        ]);
    }
}
