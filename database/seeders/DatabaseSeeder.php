<?php

namespace Database\Seeders;

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
        //for the admin user for the panel control.
        \App\Models\User::create([
            "name"=>"admin",
            "email"=>"dorubtech_admin@dorubtech.com",
            "password" => bcrypt("pXwKnSTCxiF5")
        ]);
        
    }
}
