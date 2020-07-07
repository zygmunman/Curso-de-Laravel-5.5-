<?php

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

        //Constructor de consultas de Laravel

        $professionId=DB::table('professions')
                    ->whereTitle('Desarrollador back-end')
                    ->value('id');

        DB::table('users')->insert([

            'name' => 'Duilio Palacios',
            'email'=> 'duilio@styde.net',
            'password' => bcrypt('laravel'),
            'profession_id' =>$professionId
        ]);
    }
}
