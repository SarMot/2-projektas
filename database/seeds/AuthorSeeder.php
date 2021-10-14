<?php

use Illuminate\Database\Seeder;
// jeigu raudonuoja insert reikia itraukti papildomas bibliotekas (zemiau)
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uzpildysim duomenu baze vienu irasu
        DB::table('authors')->insert([

            'name'=> Str::random(12) ,
            'surname' => Str::random(15)  ,
            'username' => Str::random(17)  ,


        ]);
    }
}
