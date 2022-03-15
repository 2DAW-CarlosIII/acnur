<?php

namespace Database\Seeders;

use App\Models\donacion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        self::seedDonanacion();
    }

    public function seedDonanacion()
    {
        $donaciones = DB::table('donaciones')->get();

        foreach ($donaciones as $donacion) {
            $d = new Donacion;
            $d->partner_type_qty = $donacion;
            $d->save();
        }
    }
}
