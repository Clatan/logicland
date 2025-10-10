<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function show($id)
    {
        $question = Question::findOrFail($id);

        $currentUrl = url()->current(); 
        $stage = '';

        if (str_contains($currentUrl, 'beginner')) {
            $level = 'beginner';

            if (str_contains($currentUrl, 'stage1')) {
                $stage = 'stage1';
            } elseif (str_contains($currentUrl, 'stage2')) {
                $stage = 'stage2';
            } elseif (str_contains($currentUrl, 'stage3')) {
                $stage = 'stage3';
            } elseif (str_contains($currentUrl, 'stage4')) {
                $stage = 'stage4';
            } elseif (str_contains($currentUrl, 'stage5')) {
                $stage = 'stage5';
            }
        }
        else if (str_contains($currentUrl, 'elementary')) {
            $level = 'elementary';

            if (str_contains($currentUrl, 'stage1')) {
                $stage = 'stage1';
            } elseif (str_contains($currentUrl, 'stage2')) {
                $stage = 'stage2';
            } elseif (str_contains($currentUrl, 'stage3')) {
                $stage = 'stage3';
            } elseif (str_contains($currentUrl, 'stage4')) {
                $stage = 'stage4';
            } elseif (str_contains($currentUrl, 'stage5')) {
                $stage = 'stage5';
            }
        }





        return view($level . '.' . $stage, compact('question', 'stage'));
    }

    public function submitAnswer(Request $request)
    {
        $questionId = $request->input('question_id');
        $answer = $request->input('answer');

        $question = Question::findOrFail($questionId);

        if ($answer === $question->question_answer) {
            // Simpan status benar di session
            return back()->with('popup', '✅ Jawaban kamu benar!');
        } else {
            return back()->with('popup', '❌ Jawaban kamu salah!');
        }
    }
}
