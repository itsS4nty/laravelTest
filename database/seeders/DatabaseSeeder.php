<?php
namespace Database\Seeders;

use App\Models\Cotxe;
use App\Models\Licitacio;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class]);
        $this->call([CotxeTableSeeder::class]);
        $this->call([LicitacioTableSeeder::class]);
        $this->call([SubastaTableSeeder::class]);
    }
}
