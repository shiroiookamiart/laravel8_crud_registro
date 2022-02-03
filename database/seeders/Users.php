<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "admin",
            'email' => "admin".'@prueba.com',
            'password' => Hash::make('12345'),
            "rol" => 1
        ]);

        DB::table('users')->insert([
            'name' => "cliente",
            'email' => "cliente".'@prueba.com',
            'password' => Hash::make('123456'),
            "rol" => 2
        ]);
    }
}
