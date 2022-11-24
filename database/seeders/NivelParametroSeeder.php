<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NivelParametroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\NivelParametro::factory()->create(
            [
                'descripcion' => 'Rojo',
                'tipo' => 'Color',
                'estado' => 'Activo',
            ],
        );

    }
}
