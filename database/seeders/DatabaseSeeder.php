<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Confiuraciones iniciales de tablas, permisos y perfiles
            TableSeeder::class,
            TypeFieldSeeder::class, // Tipos de campos
            HeadersTableSeeder::class, // Seeder para headers tablas generales
            HeaderTableClientSeeder::class, // seeder para header tabla de clientes

            PermissionSeeder::class,
            RoleSeeder::class,

            UserSeeder::class,
            ModuleSeeder::class,

            // plan de acción
            PlanAccionSeeder::class,


            // fakeseeder
            ClienteSeeder::class

        ]);
    }
}
