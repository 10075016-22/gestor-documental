<?php

namespace Database\Seeders;

use App\Models\TipoDocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nombre'      => 'PDF',
                'descripcion' => 'documentos tipo PDF',
                'tipoArchivo' => 'application/pdf'
            ]
        ];

        foreach ($data as $key => $value) {
            TipoDocumento::create($value);
        }
    }
}
