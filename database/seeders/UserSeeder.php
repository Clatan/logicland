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
                'password' => Hash::make('pris37'),
                'maxlife' => 3,
            ],
            [
                'user_id' => 2,
                'username' => 'aurynl',
                'password' => Hash::make('auryn123'),
                'maxlife' => 3,
            ],
            [
                'user_id' => 3,
                'username' => 'clatann',
                'password' => Hash::make('clatan30'),
                'maxlife' => 3,
            ],
            [
                'user_id' => 4,
                'username' => 'janedoe',
                'password' => Hash::make('jane111'),
                'maxlife' => 3,
            ],
            [
                'user_id' => 5,
                'username' => 'johndoe',
                'password' => Hash::make('john111'),
                'maxlife' => 3,
            ],
        ]);
    }
}
