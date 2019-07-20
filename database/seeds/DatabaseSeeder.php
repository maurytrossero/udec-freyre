<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->TruncateTables([
            'users',
            'permissions',
            'tipos_actividades',
            'actividades',
            'docentes',
            'inscripciones',
            'programas',
            'puntos_de_encuentros',
        ]);

        //$this->call(PermissionsTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DocentesSeeder::class);
        $this->call(TiposActividadesSeeder::class);
        $this->call(ActividadesSeeder::class);
        $this->call(ProgramaSeeder::class);
        $this->call(PuntoDeEncuentroSeeder::class;
    }

    public function TruncateTables(array $tables): void
    {
        foreach ($tables as $table)
        {
            /*
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            DB::table($table)->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');
            */

            DB::statement("TRUNCATE TABLE {$table} RESTART IDENTITY CASCADE");



        }

    }
}
