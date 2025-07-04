<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'tipo_documento_id' => 1,
                'nombre'            => '1. Carta de designación',
                'obligatorio'       => '1',
                'generaFormato'   => '1'

            ],

        ];
        //Documento::factory(120)->create();
        foreach ($data as $key => $value ) {
            Documento::create($value);
        }
    }
}
