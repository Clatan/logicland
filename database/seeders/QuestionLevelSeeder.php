<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_level')->insert([
            [
                'levelquestion_id' => 1,
                'question_id' => 1,
                'stage_id' => 1,
            ],
            [
                'levelquestion_id' => 2,
                'question_id' => 2,
                'stage_id' => 2,
            ],
            [
                'levelquestion_id' => 3,
                'question_id' => 3,
                'stage_id' => 3,
            ],
            [
                'levelquestion_id' => 4,
                'question_id' => 4,
                'stage_id' => 4,
            ],
            [
                'levelquestion_id' => 5,
                'question_id' => 5,
                'stage_id' => 5,
            ],
            [
                'levelquestion_id' => 6,
                'question_id' => 6,
                'stage_id' => 6,
            ],
            [
                'levelquestion_id' => 7,
                'question_id' => 7,
                'stage_id' => 7,
            ],
            [
                'levelquestion_id' => 8,
                'question_id' => 8,
                'stage_id' => 8,
            ],
            [
                'levelquestion_id' => 9,
                'question_id' => 9,
                'stage_id' => 9,
            ],
            [
                'levelquestion_id' => 10,
                'question_id' => 10,
                'stage_id' => 10,
            ],
            [
                'levelquestion_id' => 11,
                'question_id' => 11,
                'stage_id' => 11,
            ],
            [
                'levelquestion_id' => 12,
                'question_id' => 12,
                'stage_id' => 12,
            ],
            [
                'levelquestion_id' => 13,
                'question_id' => 13,
                'stage_id' => 13,
            ],
            [
                'levelquestion_id' => 14,
                'question_id' => 14,
                'stage_id' => 14,
            ],
            [
                'levelquestion_id' => 15,
                'question_id' => 15,
                'stage_id' => 15,
            ],
            [
                'levelquestion_id' => 16,
                'question_id' => 16,
                'stage_id' => 16,
            ],
            [
                'levelquestion_id' => 17,
                'question_id' => 17,
                'stage_id' => 17,
            ],
            [
                'levelquestion_id' => 18,
                'question_id' => 18,
                'stage_id' => 18,
            ],
            [
                'levelquestion_id' => 19,
                'question_id' => 19,
                'stage_id' => 19,
            ],
            [
                'levelquestion_id' => 20,
                'question_id' => 20,
                'stage_id' => 20,
            ],

        ]);
    }
}
