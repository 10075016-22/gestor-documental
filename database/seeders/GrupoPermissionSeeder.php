<?php

namespace Database\Seeders;

use App\Models\GrupoPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // General
            [ 'grupo_id' => 1, 'permission_id' => 6 ],
            // Home
            [ 'grupo_id' => 2, 'permission_id' => 1 ],
            [ 'grupo_id' => 2, 'permission_id' => 2 ],
            [ 'grupo_id' => 2, 'permission_id' => 3 ],
            [ 'grupo_id' => 2, 'permission_id' => 4 ],
            [ 'grupo_id' => 2, 'permission_id' => 5 ],

            // Clientes
            [ 'grupo_id' => 3, 'permission_id' => 7 ],
            [ 'grupo_id' => 3, 'permission_id' => 8 ],
            [ 'grupo_id' => 3, 'permission_id' => 9 ],
            [ 'grupo_id' => 3, 'permission_id' => 10 ],
            [ 'grupo_id' => 3, 'permission_id' => 11 ],
            [ 'grupo_id' => 3, 'permission_id' => 12 ],
        ];

        foreach ($data as $key => $value) {
            GrupoPermission::create($value);
        }
    }
}
