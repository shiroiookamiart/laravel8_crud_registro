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
            'nombre' => 'producto 1',
            'cantidad' => 150,
            "iva"=> 5,
            "valor" => 10000.0
        ]);

        DB::table('producto')->insert([
            'nombre' => 'producto 2',
            'cantidad' => 10,
            "valor" => 20000.0,
            "iva"=> 15
        ]);

        DB::table('producto')->insert([
            'nombre' => 'producto 3',
            'cantidad' => 10,
            "valor" => 20000.0,
            "iva"=> 12,
        ]);

        DB::table('producto')->insert([
            'nombre' => 'producto 4',
            'cantidad' => 10,
            "valor" => 20000.0,
            "iva"=> 8
        ]);

        DB::table('producto')->insert([
            'nombre' => 'producto 5',
            'cantidad' => 10,
            "valor" => 20000.0,
            "iva"=> 10
        ]);
    }
}
