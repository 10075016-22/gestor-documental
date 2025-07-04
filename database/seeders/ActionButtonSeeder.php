<?php

namespace Database\Seeders;

use App\Models\ActionsTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id'      => 1,
                'type_field_id' => 19,
                'order'         => 1,
                'message'       => ''
            ],
            [
                'table_id'      => 3,
                'type_field_id' => 19,
                'order'         => 1,
                'message'       => ''
            ]
        ];

        foreach ($data as $value) {
            ActionsTable::create($value);
        }
    }
}
