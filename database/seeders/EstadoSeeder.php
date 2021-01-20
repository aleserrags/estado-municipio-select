<?php

namespace Database\Seeders;

use App\Models\Estado;
use App\Models\Municipio;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Estados
        Estado::firstOrCreate([
            'nome' => 'Rondônia'
        ]);

        Estado::firstOrCreate([
            'nome' => 'Acre'
        ]);

        Estado::firstOrCreate([
            'nome' => 'Amazonas'
        ]);

        Estado::firstOrCreate([
            'nome' => 'Tocantins'
        ]);


        // Municípios Rondonia
        Municipio::firstOrCreate([
            'nome' => 'Porto Velho',
            'id_estado_fk' => 1
        ]);

        Municipio::firstOrCreate([
            'nome' => 'Guajará Mirim',
            'id_estado_fk' => 1
        ]);

        Municipio::firstOrCreate([
            'nome' => 'Nova Mamoré',
            'id_estado_fk' => 1
        ]);

        // Municípios Acre
        Municipio::firstOrCreate([
            'nome' => 'Rio Branco',
            'id_estado_fk' => 2
        ]);

        Municipio::firstOrCreate([
            'nome' => 'Porto Acre',
            'id_estado_fk' => 2
        ]);

        Municipio::firstOrCreate([
            'nome' => 'Brasiléia',
            'id_estado_fk' => 2
        ]);

        // Municípios Amazonas
        Municipio::firstOrCreate([
            'nome' => 'Manaus',
            'id_estado_fk' => 3
        ]);

        Municipio::firstOrCreate([
            'nome' => 'Humaitá',
            'id_estado_fk' => 3
        ]);

        Municipio::firstOrCreate([
            'nome' => 'Coari',
            'id_estado_fk' => 3
        ]);

        // Municípios Tocantins
        Municipio::firstOrCreate([
            'nome' => 'Palmas',
            'id_estado_fk' => 4
        ]);

        Municipio::firstOrCreate([
            'nome' => 'Porto Nacional',
            'id_estado_fk' => 4
        ]);

        Municipio::firstOrCreate([
            'nome' => 'Gurupi',
            'id_estado_fk' => 4
        ]);
    }
}
