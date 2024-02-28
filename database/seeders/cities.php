<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cities extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [
            ['state_id' => 1, 'name' => 'São Paulo'],
            ['state_id' => 1, 'name' => 'Osasco'],
            ['state_id' => 1, 'name' => 'Barueri'],
            ['state_id' => 2, 'name' => 'Paraty'],
            ['state_id' => 2, 'name' => 'Rio de Janeiro'],
            ['state_id' => 2, 'name' => 'Niterói'],
        ];

        DB::table('cities')->insert($estados);
    }
}
