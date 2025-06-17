<?php

namespace Database\Seeders;

use App\Models\EstandarCliente;
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
            HeaderTableUserSeeder::class, // seeder para headers tabla de usuarios
            HeaderTableDocumentoSeeder::class, // seeder para headers tabla de documentos
            HeaderTableEstandarSeeder::class, // seeder para headers tabla de estandar

            PermissionSeeder::class,
            RoleSeeder::class,

            UserSeeder::class,
            ModuleSeeder::class,

            // plan de acción
            PlanAccionSeeder::class,


            TipoDocumentoSeeder::class,

            // fakeseeder
            ClienteSeeder::class,
            DocumentoSeeder::class,
            CicloSeeder::class,
            EstandarSeeder::class,
            EstandarClienteSeeder::class

        ]);
    }
}
