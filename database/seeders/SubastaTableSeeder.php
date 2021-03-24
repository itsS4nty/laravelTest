<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SubastaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subasta')->insert([
            'dataFinalitzacio' => now(),
            'estat' => '1',
            'user_id' => '1',
            'cotxe_id' => '1',
            'licitacio_id' => '1',
        ]);

        /*DB::table('subasta')->insert([
            'dataFinalitzacio' => now(),
            'estat' => '1',
            'user_id' => '2',
            'cotxe_id' => '1',
            'licitacio_id' => '1',
        ]);

        DB::table('subasta')->insert([
            'dataFinalitzacio' => now(),
            'estat' => '1',
            'user_id' => '2',
            'cotxe_id' => '1',
            'licitacio_id' => '2',
        ]);

        DB::table('subasta')->insert([
            'dataFinalitzacio' => now(),
            'estat' => '1',
            'user_id' => '2',
            'cotxe_id' => '1',
            'licitacio_id' => '3',
        ]);*/

    }
}
