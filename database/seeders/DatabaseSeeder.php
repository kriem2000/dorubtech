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

        //for about us paragragh in the home page
        \App\Models\Paragraph::create([
            "body" => "the about us paragraph should be here....",
            "for_type"=> "aboutus"
        ]);

        //for the first paragragh in the home page
        \App\Models\Paragraph::create([
            "title"=>"first title",
            "body" => "paragraph should be here....",
            "for_type"=> "firstP"
        ]);

        //for the second paragragh in the home page
        \App\Models\Paragraph::create([
            "title"=>"second title",
            "body" => "paragraph should be here....",
            "for_type"=> "secondP"
        ]);

        //for the third paragragh in the home page
        \App\Models\Paragraph::create([
            "title"=>"third title",
            "body" => "paragraph should be here....",
            "for_type"=> "thirdP"
        ]);

        //for the partners paragragh in the home page
        \App\Models\Paragraph::create([
            "body" => "paragraph should be here....",
            "for_type"=> "partners"
        ]);

    }
}
