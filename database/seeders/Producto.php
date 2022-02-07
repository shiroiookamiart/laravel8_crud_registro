<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Producto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            'nombre' => 'cuaderno',
            'cantidad' => 150,
            "valor" => 10000.0
        ]);

        DB::table('producto')->insert([
            'nombre' => 'regla',
            'cantidad' => 10,
            "valor" => 20000.0
        ]);
    }
}
