<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admin@lightbp.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Carlos',
            'email' => 'carloskeko80@gmail.com',
            'email_verified_at' => now(),
            'rol' => 'venedor',
            'password' => Hash::make('carlos1234'),
            'created_at' => now(),
            'updated_at' => now(),
            'saldo' => 10000
        ]);

        DB::table('users')->insert([
            'name' => 'Santi',
            'email' => 'santi@gmail.com',
            'email_verified_at' => now(),
            'rol' => 'comprador',
            'password' => Hash::make('santi1234'),
            'created_at' => now(),
            'updated_at' => now(),
            'saldo' => 10000
        ]);

        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'administrador@gmail.com',
            'email_verified_at' => now(),
            'rol' => 'administrador',
            'password' => Hash::make('administrador1234'),
            'created_at' => now(),
            'updated_at' => now(),
            'saldo' => 999999
        ]);

        DB::table('users')->insert([
            'name' => 'Subhastador',
            'email' => 'subhastador@gmail.com',
            'email_verified_at' => now(),
            'rol' => 'subhastador',
            'password' => Hash::make('subhastador1234'),
            'created_at' => now(),
            'updated_at' => now(),
            'saldo' => 10000
        ]);
    }
}
