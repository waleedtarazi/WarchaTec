<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       User::create([
            'name' => "waleed",
            'email' => "waleed@gmail.com",
            'password' => Hash::make('waleed'),
        ]);


        User::create([
            'name' => "Ahmad",
            'email' => "Ahmad@gmail.com",
            'password' => Hash::make('Ahmad'),
        ]);
        User::create([
            'name' => "bob",
            'email' => "bob@gmail.com",
            'password' => Hash::make('bob'),
        ]);

    }
}
