<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LicitacioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('licitacio')->insert([
            'preu' => '12',
            'user_id' => '1'
        ]);

        DB::table('licitacio')->insert([
            'preu' => '25',
            'user_id' => '3'
        ]);

        DB::table('licitacio')->insert([
            'preu' => '235',
            'user_id' => '3'
        ]);
    }
}
