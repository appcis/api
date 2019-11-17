<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // creation du superadmin
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@mail.com',
            'password' => bcrypt('adminadmin'),
            'permissions' => 'superadmin',
            'active' => true
        ]);

        // creation de l'admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('adminadmin'),
            'permissions' => 'admin',
            'active' => true
        ]);

        // creation d'un utilisateur
        User::create([
            'name' => 'Admin',
            'email' => 'user@mail.com',
            'password' => bcrypt('useruser'),
            'permissions' => 'user',
            'active' => true
        ]);
    }
}
