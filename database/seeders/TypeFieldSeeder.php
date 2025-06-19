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
            ],
            [
                'name'        => 'FIELD_STATUS',
                'description' => 'Campo para estados'
            ],
            [
                'name'        => 'FIELD_LOGO',
                'description' => 'Campo para mostrar logo'
            ],
            [
                'name'        => 'FIELD_YES_NO',
                'description' => 'Campo para mostrar SI - NO'
            ],
            [
                'name'        => 'FIELD_CHIP',
                'description' => 'Campo para mostrar el texto en un chip'
            ]
        ];

        foreach ($data as $key => $value) {
            TypeField::create($value);
        }
    }
}
