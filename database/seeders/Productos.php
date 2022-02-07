<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => "PC",
            'cantidad' => 50,
            'valor' => 1200,
        ]);

        DB::table('productos')->insert([
            'nombre' => "Laptop",
            'cantidad' => 3,
            'valor' => 2500,
        ]);
    }
}
