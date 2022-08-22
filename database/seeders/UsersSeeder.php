<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('user')->insert([
            'name'=>'vyshnavi',
            'email'=>'vyshnavi@gmail.com',
            'password'=>Hash::make('root'),
           
        ]);
     }
}
