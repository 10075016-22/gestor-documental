<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'  => 'perfiles',
                'alias' => 'Menú de perfiles',
            ]
        ];

        // Utiliza un bucle foreach para insertar cada conjunto de datos
        foreach ($data as $val) {
            Permission::create($val);
        }
    }
}
