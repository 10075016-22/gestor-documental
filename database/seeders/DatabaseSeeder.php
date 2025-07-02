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
            HeaderTablePlaneacionDocumentoSeeder::class, // seeder para headers tabla de fecha limite para subir documentos
            HeaderTableCicloSeeder::class, // seeder para headers tabla de ciclos
            HeaderTablePlanAccionSeeder::class, // headers para plan de acción
            HeaderTableRoleSeeder::class, // headers para perfiles

            PermissionSeeder::class,
            PermissionClientSeeder::class, // Permisos para clientes
            PermissionEvaluacionSeeder::class, // Permisos para usuarios
            PermissionDocumentoSeeder::class, // Permisos para documentos
            PermissionPlaneacionDocumentoSeeder::class, // Permisos para planeación de documentos - fecha límite
            PermissionEstandarSeeder::class, // Permisos para estandar de cliente
            PermissionUsuarioSeeder::class, // Permisos para usuarios
            PermissionReportesSeeder::class, // Permisos para reportes
            PermissionConfiguracionSeeder::class, // Permisos para configuración
            PermissionRoleSeeder::class, // Permisos para configuración

            RoleSeeder::class,

            UserSeeder::class,
            ModuleSeeder::class,
            GrupoSeeder::class, // Grupos para asociar permisos
            GrupoPermissionSeeder::class, // asociamos permisos a grupos

            // plan de acción
            PlanAccionSeeder::class,


            TipoDocumentoSeeder::class,

            CicloSeeder::class,

            // formularios
            FormClienteSeeder::class, // Seeder para formulario de cliente
            FormDocumentoSeeder::class, // seeder para documentos
            FormUserSeeder::class,

            // fakeseeder
            // ClienteSeeder::class,
            // DocumentoSeeder::class,
            // EstandarSeeder::class,
            // EstandarClienteSeeder::class,
            // PlaneacionDocumentoSeeder::class,

        ]);
    }
}
