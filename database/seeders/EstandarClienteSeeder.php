<?php

namespace Database\Seeders;

use App\Models\EstandarCliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstandarClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstandarCliente::factory(20)->create();
    }
}
