<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProgress extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_progress')->insert([
            [
                'progress_id' => 1,
                'user_id' => 4,
                'stage_id' => 1,
                'attempt_remaining' => 3,
                'status' => 'running'
            ],
            [
                'progress_id' => 2,
                'user_id' => 5,
                'stage_id' => 1,
                'attempt_remaining' => 3,
                'status' => 'running'
            ],
        ]);
    }
}
