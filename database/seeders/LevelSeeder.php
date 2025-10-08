<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('levels')->insert([
            [
                'level_id' => 1,
                'level_name' => 'Beginner',
            ],
            [
                'level_id' => 2,
                'level_name' => 'Elementary',
            ],
            [
                'level_id' => 3,
                'level_name' => 'Intermediate',
            ],
            [
                'level_id' => 4,
                'level_name' => 'Advanced',
            ],
        ]);
    }
}
