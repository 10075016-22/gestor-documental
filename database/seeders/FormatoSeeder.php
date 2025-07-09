<?php

namespace Database\Seeders;

use App\Models\Formato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'nombre' => 'FORMATO 7' ],
            [ 'nombre' => 'FORMATO 21' ],
            [ 'nombre' => 'FORMATO 60' ],
        ];

        foreach ($data as $key => $value) {
            Formato::create($value);
        }
    }
}
