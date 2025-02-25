<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::insert([
             'name' => 'Serhat',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('123456'),
             'created_at' => now(),
             'updated_at' => now(),
             'email_verified_at' => now(),
             'remember_token' => Str::random(10),
             
           
        ]);

    }
}
