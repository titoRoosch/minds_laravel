<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class states extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            ['acr' => 'SP', 'name' => 'São Paulo'],
            ['acr' => 'RJ', 'name' => 'Rio de Janeiro'],
            ['acr' => 'AC', 'name' => 'Acre'],
            ['acr' => 'AL', 'name' => 'Alagoas'],
            ['acr' => 'AP', 'name' => 'Amapá'],
            ['acr' => 'AM', 'name' => 'Amazonas'],
            ['acr' => 'BA', 'name' => 'Bahia'],
            ['acr' => 'CE', 'name' => 'Ceará'],
            ['acr' => 'DF', 'name' => 'Distrito Federal'],
            ['acr' => 'ES', 'name' => 'Espírito Santo'],
            ['acr' => 'GO', 'name' => 'Goiás'],
            ['acr' => 'MA', 'name' => 'Maranhão'],
            ['acr' => 'MT', 'name' => 'Mato Grosso'],
            ['acr' => 'MS', 'name' => 'Mato Grosso do Sul'],
            ['acr' => 'MG', 'name' => 'Minas Gerais'],
            ['acr' => 'PA', 'name' => 'Pará'],
            ['acr' => 'PB', 'name' => 'Paraíba'],
            ['acr' => 'PR', 'name' => 'Paraná'],
            ['acr' => 'PE', 'name' => 'Pernambuco'],
            ['acr' => 'PI', 'name' => 'Piauí'],
            ['acr' => 'RN', 'name' => 'Rio Grande do Norte'],
            ['acr' => 'RS', 'name' => 'Rio Grande do Sul'],
            ['acr' => 'RO', 'name' => 'Rondônia'],
            ['acr' => 'RR', 'name' => 'Roraima'],
            ['acr' => 'SC', 'name' => 'Santa Catarina'],
            ['acr' => 'SE', 'name' => 'Sergipe'],
            ['acr' => 'TO', 'name' => 'Tocantins']
        ];

        DB::table('states')->insert($estados);

    }
}
