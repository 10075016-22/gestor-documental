<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'SuperAdmin']);

        // consultamos  todos los permisos
        $permissions = Permission::all();

        // Asigna todos los permisos al rol
        $admin->syncPermissions($permissions);
        
        $gestor = Role::create(['name' => 'Gestor']);
        $cliente = Role::create(['name' => 'Cliente']);

        $gestor_permissions = [1, 3, 5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,41,46];
        $cliente_permissions = [1,3,6,14,15,22,38,39,42,44,46,52];

        $gestor->syncPermissions($gestor_permissions);
        $cliente->syncPermissions($cliente_permissions);
    }
}
