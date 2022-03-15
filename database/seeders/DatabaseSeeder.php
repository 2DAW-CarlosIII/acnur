<?php

namespace Database\Seeders;

use App\Models\Acogido;
use App\Models\Acogimiento;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

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
        Schema::disableForeignKeyConstraints();
        Acogimiento::truncate();
        User::truncate();
        Acogido::truncate();
        Schema::enableForeignKeyConstraints();

        // rellenar las tablas
        User::factory(20)->create();
        Acogido::factory(40)->create();
        Acogimiento::factory(20)->create();

        User::create([
            'email' => 'admin@acnur.org',
            'name' => 'admin',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
