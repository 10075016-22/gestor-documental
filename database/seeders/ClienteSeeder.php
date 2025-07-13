<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\UsuarioXCliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::factory(30)->create();

        $clientes = Cliente::all();
        foreach ($clientes as $key => $cliente) {
            UsuarioXCliente::create([
                'user_id'   => 1,
                'cliente_id' => $cliente->id
            ]);
        }
    }
}
