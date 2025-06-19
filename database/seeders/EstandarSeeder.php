<?php

namespace Database\Seeders;

use App\Models\Estandar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstandarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estandar::factory(35)->create();
    }
}
