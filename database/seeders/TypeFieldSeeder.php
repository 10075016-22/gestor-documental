<?php

namespace Database\Seeders;

use App\Models\TypeField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'        => 'FIELD_TEXT',
                'description' => 'Campo tipo texto'
            ]
        ];

        foreach ($data as $key => $value) {
            TypeField::create($value);
        }
    }
}
