<?php

use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::insert('insert into professions (title) values (:title)', [
            
            //'title'=>'Desarrollador backend'
        //]);


        //DB::table('professions')->insert([

            //'title' => 'Desarrollador back-end'
        //]);


        Profession::create([

            'title'=>'Desarrollador back-end'

        ]);

        Profession::create([

            'title'=>'Desarrollador front-end'

        ]);

        Profession::create([

            'title'=>'Diseñador web'

        ]);
    }
}
