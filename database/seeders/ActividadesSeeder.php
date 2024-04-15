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
        DB::table('actividades')->insert([
            'nombre'=>'Fotografía',
            'descripcion'=>'Taller básico de fotografía, enseña manejo de cámara.',
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
            'descripcion'=>'Aprende técnicas de dibujo de caricaturas.',
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
            'descripcion'=>'Explora el arte de la cerámica y modelado.',
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
            'descripcion'=>'Aprende desde coser a patrones avanzados.',
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
            'descripcion'=>'Descubre el arte de crear mosaicos únicos.',
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
            'descripcion'=>'Explora tu creatividad a través de la pintura.',
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
            'descripcion'=>'Aprende técnicas de tejido de tapices.',
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
            'descripcion'=>'Descubre el arte de tejer tus propias prendas.',
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
            'descripcion'=>'Aprende las reglas y estrategias del ajedrez.',
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
            'descripcion'=>'Descubre el mundo de la cocina y sus técnicas.',
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
            'descripcion'=>'Aprende a crear arte mediante pirograbado.',
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
            'descripcion'=>'Aprende técnicas de dibujo de caricaturas.',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Martes',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '1',
        ]);
        
               DB::table('actividades')->insert([
            'nombre'=>'Batería',
            'descripcion'=>'Explora el ritmo y la percusión en este taller de batería.',
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
            'descripcion'=>'Desarrolla tu voz y técnica vocal en este taller de canto.',
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
            'descripcion'=>'Aprende a destacarte como solista en este taller de interpretación.',
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
            'descripcion'=>'Disfruta cantando en grupo y aprende armonización coral.',
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
            'descripcion'=>'Explora las tradiciones musicales folclóricas en este taller.',
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
            'descripcion'=>'Aprende los pasos y ritmos del malambo en este taller.',
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
            'descripcion'=>'Descubre la variedad de instrumentos de percusión y sus ritmos.',
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
            'descripcion'=>'Aprende a tocar el piano y desarrolla tu habilidad musical.',
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
            'descripcion'=>'Domina la guitarra y disfruta tocando tus canciones favoritas.',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '2',
        ]);
        
        
                DB::table('actividades')->insert([
            'nombre'=>'Inglés',
            'descripcion'=>'Aprende el idioma inglés en un ambiente divertido y dinámico.',
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
            'descripcion'=>'Sumérgete en la lengua y cultura francesa en este taller de francés.',
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
            'descripcion'=>'Descubre el idioma italiano y su rica herencia cultural en este taller.',
            'fecha_inicio'=>'2019-04-06',
            'fecha_finalizacion'=>'2019-11-27',
            'costo_mensual'=>'300',
            'dia_cursado'=>'Miércoles',
            'horario'=>'14:00',
            'estado_inscripcion'=>'abierta',
            'tipo_actividad_id' => '3',
        ]);
        
        DB::table('actividades')->insert([
            'nombre'=>'Ballet “Inti Huaira”',
            'descripcion'=>'Únete al elenco de Ballet “Inti Huaira” y vive la magia de la danza.',
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
            'descripcion'=>'Forma parte del coro de niños y disfruta cantando en grupo.',
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
            'descripcion'=>'Explora la armonía vocal en el coro polifónico.',
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
            'descripcion'=>'Forma parte del coro Ítalo Piemontés y celebra la música italiana.',
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
            'descripcion'=>'Únete al grupo musical Los Dueños del Reloj y comparte tu talento.',
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
            'descripcion'=>'Únete al elenco musical Las Estrellas y brilla en el escenario.',
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
            'descripcion'=>'Aprende sobre Agronegocios y desarrolla tu carrera en el sector.',
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
            'descripcion'=>'Explora el campo de la enfermería y desarrolla habilidades clave.',
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
            'descripcion'=>'Sumérgete en el mundo del Comercio Exterior y expande horizontes.',
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
            'descripcion'=>'Descubre el potencial del Coaching y ayuda a otros a alcanzar sus metas.',
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
            'descripcion'=>'Domina Excel y mejora tu eficiencia en el trabajo y la gestión de datos.',
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
            'descripcion'=>'Aprende los fundamentos de la Gestión Administrativa para optimizar procesos.',
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
            'descripcion'=>'Explora el mundo de la Grafología y descubre cómo interpretar la escritura.',
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
            'descripcion'=>'Sumérgete en el mundo del Marketing Digital y potencia tu presencia online.',
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
            'descripcion'=>'Domina el arte de la Oratoria y mejora tus habilidades de comunicación.',
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
            'descripcion'=>'Aprende inglés enfocado en situaciones de viaje y comunicación internacional.',
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
            'descripcion'=>'Desarrolla tus habilidades de comprensión lectora para una mejor comprensión de textos.',
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
            'descripcion'=>'Aprende a gestionar tu tiempo de manera eficiente y aumenta tu productividad.',
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
            'descripcion'=>'Aprende el lenguaje de señas y comunícate con personas con discapacidad auditiva.',
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
            'descripcion'=>'Adquiere habilidades básicas y avanzadas en computación adaptadas para adultos.',
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
            'descripcion'=>'Aprende sobre gestión bancaria y los aspectos impositivos relacionados.',
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
            'descripcion'=>'Domina el proceso de liquidación de sueldos y jornales en este curso práctico.',
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
            'descripcion'=>'Aprende técnicas avanzadas de costura para la producción industrial.',
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
            'descripcion'=>'Obtén los conocimientos necesarios para desempeñarte como gasista matriculado.',
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
            'descripcion'=>'Aprende a realizar la conexión de redes eléctricas de manera segura y eficiente.',
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
