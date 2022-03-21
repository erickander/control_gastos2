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
        //
        DB::table('users')->insert([ 

          'usu_name'=>'admin',
           'usu_cedula'=>'123456789',
            'usu_email'=>'admin@a.com',
             'usu_rol'=>'padre',
             'password'=>bcrypt('123456789'),
             'created_at'=>'2022-03-21',
             'per_id'=>1



        ]);
    }
    
}
