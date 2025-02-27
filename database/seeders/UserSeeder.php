<?php

namespace Database\Seeders;

use App\Models\Role;
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

        $role = Role::updateOrCreate([
            'name' => 'yonetici',
        ], [
            'name' => 'yonetici',
            'title' => 'Yönetici',
            'description' => 'Sitenin genel yönetimini sağlar.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $roleBlog = Role::updateOrCreate([
            'name' => 'blog-yoneticisi',
        ], [
            'name' => 'blog-yoneticisi',
            'title' => 'Blog Yöneticisi',
            'description' => 'Blog Yönetimini sağlar.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $roleECommerce = Role::updateOrCreate([
            'name' => 'e-commerce-yoneticisi',
        ], [
            'name' => 'e-commerce-yoneticisi',
            'title' => 'E-Commerce Yöneticisi',
            'description' => 'E-Commerce Yönetimini sağlar.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $user = User::updateOrCreate([
            'email' => 'admin@gmail.com',

        ], [
            'name' => 'Serhat',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole($role);



        if (User::count() == 1) {
            $users = User::factory(100)->create();

            foreach ($users as $user) {
                $user->assignRole(rand(0, 1) == 1 ? $roleBlog : $roleECommerce);
            }
        }


    }
}
