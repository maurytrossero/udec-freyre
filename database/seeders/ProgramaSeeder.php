<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Programas Culturales
        DB::table('programas')->insert([
            'nombre' => 'Museo Virtual del Deporte',
            'descripcion' => 'Explora la rica historia del deporte a través de una colección digital única que presenta momentos destacados, héroes legendarios y eventos emblemáticos.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Legados',
            'descripcion' => 'Descubre las historias detrás de los grandes legados culturales y patrimoniales que han dejado una huella perdurable en nuestra sociedad.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Historias de mascotas',
            'descripcion' => 'Adéntrate en las fascinantes historias y aventuras de nuestras queridas mascotas, explorando su lealtad, inteligencia y vínculos emocionales con los humanos.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Historias de motoqueros',
            'descripcion' => 'Sumérgete en el emocionante mundo de los motoqueros y descubre las increíbles aventuras, viajes y pasiones que los impulsan a recorrer nuevos horizontes sobre dos ruedas.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Lazos saludables',
            'descripcion' => 'Explora las claves para una vida saludable y equilibrada, descubriendo hábitos, prácticas y consejos que promueven el bienestar físico, mental y emocional.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Freyre Suena',
            'descripcion' => 'Sumérgete en el vibrante mundo de la música, explorando sonidos, ritmos y melodías que inspiran, emocionan y conectan a personas de todas las edades y culturas.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Freyre Escribe',
            'descripcion' => 'Desarrolla tu creatividad y habilidades literarias explorando el poder de las palabras, la imaginación y la expresión escrita en diversas formas y géneros literarios.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Freyre Canta',
            'descripcion' => 'Descubre y desarrolla tu talento vocal, explorando técnicas de canto, expresión musical y performance escénica bajo la guía de profesionales experimentados.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Freyre Colorido',
            'descripcion' => 'Explora el fascinante mundo del arte y la creatividad visual, descubriendo técnicas, estilos y expresiones artísticas que llenan de color y vida nuestro entorno.',
        ]);

        // Programas Educativos
        DB::table('programas')->insert([
            'nombre' => 'Coordinación en secundario para adultos',
            'descripcion' => 'Ofrecemos una educación secundaria adaptable y accesible para adultos que desean completar sus estudios, desarrollar nuevas habilidades y abrir oportunidades laborales y académicas.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Boleto Educativo Gratuito',
            'descripcion' => 'Facilitamos el acceso equitativo a la educación brindando transporte gratuito a estudiantes de todos los niveles educativos, promoviendo la igualdad de oportunidades y el desarrollo social.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Apoyo Escolar',
            'descripcion' => 'Brindamos recursos, tutorías y asistencia académica para estudiantes de todos los niveles educativos, promoviendo el éxito escolar, la motivación y el desarrollo integral.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Becas',
            'descripcion' => 'Apoyamos el acceso a la educación superior otorgando becas a estudiantes talentosos y con necesidades económicas, promoviendo la excelencia académica y el desarrollo de líderes.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Prácticas Estudiantiles',
            'descripcion' => 'Ofrecemos oportunidades de aprendizaje práctico y experiencia laboral a estudiantes, facilitando su transición al mundo laboral y preparándolos para desafíos futuros.',
        ]);

        // Programas Laborales
        DB::table('programas')->insert([
            'nombre' => 'PPP',
            'descripcion' => 'Promovemos la inserción laboral y el desarrollo profesional brindando programas de capacitación, empleo y apoyo a personas en situación de vulnerabilidad social.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Xmi',
            'descripcion' => 'Fomentamos la inclusión laboral y la igualdad de oportunidades ofreciendo programas de formación, empleo y apoyo a personas con discapacidad, promoviendo la diversidad y la integración.',
        ]);

        DB::table('programas')->insert([
            'nombre' => 'Pila',
            'descripcion' => 'Impulsamos el emprendimiento y la creación de empleo a través de programas de financiamiento, capacitación y asesoramiento para jóvenes emprendedores y microempresarios.',
        ]);

    }
}
