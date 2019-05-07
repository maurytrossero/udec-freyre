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
            'tipos_actividades',
            'actividades',
            'docentes',
            'inscripciones'
        ]);

        $this->call(UserSeeder::class);
        $this->call(DocentesSeeder::class);
        $this->call(TiposActividadesSeeder::class);
        $this->call(ActividadesSeeder::class);
       // $this->call(InscripcionesSeeder::class);
    }

    public function TruncateTables(array $tables): void
    {
        foreach ($tables as $table)
        {/*
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            DB::table($table)->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        */
            DB::statement($this->getDisableStatement());
            DB::table($table)->truncate();
            DB::statement($this->getEnableStatement());
        }

    }
}
