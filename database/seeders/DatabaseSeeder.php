<?php

namespace Database\Seeders;

use App\Models\Acogido;
use App\Models\Acogimiento;
use App\Models\User;
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
        // vaciar las tablas
        Acogimiento::truncate();
        User::truncate();
        Acogido::truncate();

        // rellenar las tablas
        User::factory(20)->create();
        Acogido::factory(40)->create();
        Acogimiento::factory(20)->create();
    }
}
