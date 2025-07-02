<?php

namespace Database\Seeders;

use App\Models\HeadersTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderTableRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'table_id' => 9,
                'text'     => 'ID',
                'value'    => 'id',
                'order'    => 1
            ],
            [
                'table_id' => 9,
                'text'     => 'Perfil',
                'value'    => 'name',
                'order'    => 2
            ],
            [
                'table_id' => 9,
                'text'     => 'Tag',
                'value'    => 'guard_name',
                'order'    => 3
            ],
        ];

        foreach ($data as $key => $value) {
            HeadersTable::create($value);
        }
    }
}
