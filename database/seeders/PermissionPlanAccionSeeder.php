<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionPlanAccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'  => 'plan-accion',
                'alias' => 'Vista de plan de acción',
            ],
            [
                'name'  => 'plan-accion-datatable',
                'alias' => 'Vista de datatable de plan de acción',
            ]
        ];

        foreach ($data as $permission) {
            Permission::create($permission);
        }
    }
}
