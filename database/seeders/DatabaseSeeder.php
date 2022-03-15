<?php

namespace Database\Seeders;

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
        //\App\Models\User::factory(10)->create();
        self::seedUsers();
    }

    private static function seedUsers()
    {

        foreach (self::$arrayUsuarios as $usuarios) {
            $usuarios['password']=bcrypt($usuarios['password']);
            User::create(
                $usuarios
            );
        }


    }

    private static $arrayUsuarios = array(
        array(
            'name' => "Andres Correa Sanchez",
            'email' => "4153518@alu.murciaeduca.es",
            'password' => 'alumno',
        )
    );
}
