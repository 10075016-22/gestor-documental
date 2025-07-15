<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeguimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'  => 'seguimiento',
                'alias' => 'Menu de seguimiento',
            ]
        ];

        foreach ($data as $permission) {
            Permission::create($permission);
        }
    }
}
