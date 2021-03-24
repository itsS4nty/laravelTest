<?php

namespace Database\Seeders;

use App\Models\Cotxe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CotxeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cotxe')->insert([
            'matricula' => 'WF2G1241',
            'nom' => 'nombre',
            'tipus' => 'prueba',
            'motor' => 'motorsito',
            'pathImage' => 'path/prueba',
            'marca' => 'chevrolet',
            'user_id' => 1,
        ]);

        DB::table('cotxe')->insert([
            'matricula' => 'WF2G1241',
            'nom' => 'nombre',
            'tipus' => 'prueba',
            'motor' => 'motorsito',
            'pathImage' => 'path/prueba',
            'marca' => 'chevrolet',
            'user_id' => 2,
        ]);

        DB::table('cotxe')->insert([
            'matricula' => 'WF2G1241',
            'nom' => 'otroPrueba',
            'tipus' => 'prueba',
            'motor' => 'motorsito',
            'pathImage' => 'path/prueba',
            'marca' => 'chevrolet',
            'user_id' => 2,
        ]);

        DB::table('cotxe')->insert([
            'matricula' => 'WF2G1241',
            'nom' => 'CotxeSanti',
            'tipus' => 'prueba',
            'motor' => 'motorsito',
            'pathImage' => 'path/prueba',
            'marca' => 'chevrolet',
            'user_id' => 3,
        ]);
    }
}
