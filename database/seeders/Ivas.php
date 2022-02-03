<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Ivas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ivas')->insert([
            'valor' => 15
        ]);
    }
}
