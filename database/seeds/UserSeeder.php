<?php

use App\User;
use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Constructor de consultas SQL

        //$professions=DB::select('select id from professions where title=?', ['title' =>'Desarrollador back-end']);


        $professionId=Profession::where('title', 'Desarrollador back-end')->value('id');

        User::create([

            'name' => 'Duilio Palacios',
            'email'=> 'duilio@styde.net',
            'password' => bcrypt('laravel'),
            'profession_id' =>$professionId
        ]);
    }
}
