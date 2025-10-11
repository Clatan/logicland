<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('questions')->insert([
            [
                'question_id' => 1,
                'question_detail' => 'stage1.svg',
                'question_answer' => 'D',
            ],
            [
                'question_id' => 2,
                'question_detail' => 'stage2.svg',
                'question_answer' => 'B',
            ],
            [
                'question_id' => 3,
                'question_detail' => 'stage3.svg',
                'question_answer' => 'D',
            ],
            [
                'question_id' => 4,
                'question_detail' => 'stage4.svg',
                'question_answer' => 'A',
            ],
            [
                'question_id' => 5,
                'question_detail' => 'stage5.svg',
                'question_answer' => 'A',
            ],
            [
                'question_id' => 6,
                'question_detail' => 'stage1.svg',
                'question_answer' => 'D',
            ],
            [
                'question_id' => 7,
                'question_detail' => 'stage2.svg',
                'question_answer' => 'A',
            ],
            [
                'question_id' => 8,
                'question_detail' => 'stage3.svg',
                'question_answer' => 'B',
            ],
            [
                'question_id' => 9,
                'question_detail' => 'stage4.svg',
                'question_answer' => 'C',
            ],
            [
                'question_id' => 10,
                'question_detail' => 'stage5.svg',
                'question_answer' => 'D',
            ],
            [
                'question_id' => 11,
                'question_detail' => 'stage1.svg',
                'question_answer' => 'A',
            ],
            [
                'question_id' => 12,
                'question_detail' => 'stage2.svg',
                'question_answer' => 'B',
            ],
            [
                'question_id' => 13,
                'question_detail' => 'stage3.svg',
                'question_answer' => 'D',
            ],
            [
                'question_id' => 14,
                'question_detail' => 'stage4.svg',
                'question_answer' => 'D',
            ],
            [
                'question_id' => 15,
                'question_detail' => 'stage5.svg',
                'question_answer' => 'B',
            ],
            [
                'question_id' => 16,
                'question_detail' => 'stage1.svg',
                'question_answer' => 'D',
            ],
            [
                'question_id' => 17,
                'question_detail' => 'stage2.svg',
                'question_answer' => 'C',
            ],
            [
                'question_id' => 18,
                'question_detail' => 'stage3.svg',
                'question_answer' => 'C',
            ],
            [
                'question_id' => 19,
                'question_detail' => 'stage4.svg',
                'question_answer' => 'D',
            ],
            [
                'question_id' => 20,
                'question_detail' => 'stage5.svg',
                'question_answer' => 'B',
            ],
        ]);
    }
}
