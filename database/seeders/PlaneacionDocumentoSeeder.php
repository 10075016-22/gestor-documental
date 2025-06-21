<?php

namespace Database\Seeders;

use App\Models\PlaneacionDocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaneacionDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlaneacionDocumento::factory(20)->create();
    }
}
