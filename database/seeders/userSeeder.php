<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Db::table('users')->insert([
            'name' =>'max james',
            'email'=>'max@gmail.com',
            'role'=>'0',
            'password'=>Hash::make('james')
        ]);
    }
}
