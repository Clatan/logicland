<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stages')->insert([
            // Level 1: Beginner
            ['stage_id' => 1, 'stage_name' => '1', 'level_id' => 1],
            ['stage_id' => 2, 'stage_name' => '2', 'level_id' => 1],
            ['stage_id' => 3, 'stage_name' => '3', 'level_id' => 1],
            ['stage_id' => 4, 'stage_name' => '4', 'level_id' => 1],
            ['stage_id' => 5, 'stage_name' => '5', 'level_id' => 1],

            // Level 2: Elementary
            ['stage_id' => 6, 'stage_name' => '1', 'level_id' => 2],
            ['stage_id' => 7, 'stage_name' => '2', 'level_id' => 2],
            ['stage_id' => 8, 'stage_name' => '3', 'level_id' => 2],
            ['stage_id' => 9, 'stage_name' => '4', 'level_id' => 2],
            ['stage_id' => 10, 'stage_name' => '5', 'level_id' => 2],

            // Level 3: Intermediate
            ['stage_id' => 11, 'stage_name' => '1', 'level_id' => 3],
            ['stage_id' => 12, 'stage_name' => '2', 'level_id' => 3],
            ['stage_id' => 13, 'stage_name' => '3', 'level_id' => 3],
            ['stage_id' => 14, 'stage_name' => '4', 'level_id' => 3],
            ['stage_id' => 15, 'stage_name' => '5', 'level_id' => 3],

            // Level 4: Advanced
            ['stage_id' => 16, 'stage_name' => '1', 'level_id' => 4],
            ['stage_id' => 17, 'stage_name' => '2', 'level_id' => 4],
            ['stage_id' => 18, 'stage_name' => '3', 'level_id' => 4],
            ['stage_id' => 19, 'stage_name' => '4', 'level_id' => 4],
            ['stage_id' => 20, 'stage_name' => '5', 'level_id' => 4],
        ]);
    }
}
