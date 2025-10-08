<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'user_id' => 1,
                'username' => 'prisciliaking',
                'email' => 'pris@gmail.com',
                'password' => Hash::make('pris37'),
                'maxlife' => 3,
            ],
            [
                'user_id' => 2,
                'username' => 'aurynl',
                'email' => 'auryn@gmail.com',
                'password' => Hash::make('auryn123'),
                'maxlife' => 3,
            ],
            [
                'user_id' => 3,
                'username' => 'clatann',
                'email' => 'clatan@gmail.com',
                'password' => Hash::make('clatan30'),
                'maxlife' => 3,
            ],
            [
                'user_id' => 4,
                'username' => 'janedoe',
                'email' => 'jane@gmail.com',
                'password' => Hash::make('jane111'),
                'maxlife' => 3,
            ],
            [
                'user_id' => 5,
                'username' => 'johndoe',
                'email' => 'john@gmail.com',
                'password' => Hash::make('john111'),
                'maxlife' => 3,
            ],
        ]);
    }
}
