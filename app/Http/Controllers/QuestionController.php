<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Progress;

class QuestionController extends Controller
{
   
    public function getAttempts()
    {
        $user_id = auth()->id();
        $progress = Progress::where('user_id', $user_id)->first();

        return response()->json([
            'attempt_remaining' => $progress->attempt_remaining
        ]);
    }


    public function show($id)
    {
        $question = Question::findOrFail($id);
        $currentUrl = url()->current();
        $stage = '';
        $question_id = null;
        $level = '';

        if (str_contains($currentUrl, 'beginner')) {
            $level = 'beginner';

            if (str_contains($currentUrl, 'stage1')) {
                $stage = 'stage1';
                $question->question_id = 1;
            } elseif (str_contains($currentUrl, 'stage2')) {
                $stage = 'stage2';
                $question_id = 2;
            } elseif (str_contains($currentUrl, 'stage3')) {
                $stage = 'stage3';
                $question_id = 3;
            } elseif (str_contains($currentUrl, 'stage4')) {
                $stage = 'stage4';
                $question_id = 4;
            } elseif (str_contains($currentUrl, 'stage5')) {
                $stage = 'stage5';
                $question_id = 5;
            }
        } else if (str_contains($currentUrl, 'elementary')) {
            $level = 'elementary';

            if (str_contains($currentUrl, 'stage1')) {
                $stage = 'stage1';
                $question->question_id = 6;
            } elseif (str_contains($currentUrl, 'stage2')) {
                $stage = 'stage2';
                $question->question_id = 7;
            } elseif (str_contains($currentUrl, 'stage3')) {
                $stage = 'stage3'; 
                $question->question_id = 8;
            } elseif (str_contains($currentUrl, 'stage4')) {
                $stage = 'stage4';
                $question->question_id = 9;
            } elseif (str_contains($currentUrl, 'stage5')) {
                $stage = 'stage5';
                $question->question_id = 10;
            }
        } else if (str_contains($currentUrl, 'intermediate')) {
            $level = 'intermediate';

            if (str_contains($currentUrl, 'stage1')) {
                $stage = 'stage1';
                $question->question_id = 11;
            } elseif (str_contains($currentUrl, 'stage2')) {
                $stage = 'stage2';
                $question->question_id = 12;
            } elseif (str_contains($currentUrl, 'stage3')) {
                $stage = 'stage3';
                $question->question_id = 13;
            } elseif (str_contains($currentUrl, 'stage4')) {
                $stage = 'stage4';
                $question->question_id = 14;
            } elseif (str_contains($currentUrl, 'stage5')) {
                $stage = 'stage5';
                $question->question_id = 15;
            }
        } else if (str_contains($currentUrl, 'advance')) {
            $level = 'advance';

            if (str_contains($currentUrl, 'stage1')) {
                $stage = 'stage1';
                $question->question_id = 16;
            } elseif (str_contains($currentUrl, 'stage2')) {
                $stage = 'stage2';
                $question->question_id = 17;
            } elseif (str_contains($currentUrl, 'stage3')) {
                $stage = 'stage3';
                $question->question_id = 18;
            } elseif (str_contains($currentUrl, 'stage4')) {
                $stage = 'stage4';
                $question->question_id = 19;
            } elseif (str_contains($currentUrl, 'stage5')) {
                $stage = 'stage5';
                $question->question_id = 20;
            }
        }

         return view($level . '.' . $stage, compact('question', 'stage'));
    }

    public function submitAnswer(Request $request)
    {
        $questionId = $request->input('question_id');
        $answer = $request->input('answer');

        $question = Question::findOrFail($questionId);
        $user_id = auth()->id();

        if ($answer === $question->question_answer) {
            $current_stage = $question->question_id;

            $status = 'Success';
            $message = 'Wow Incredible! You Successfully finish the Stage ' . $current_stage;
            $userProgress = Progress::where('user_id', $user_id)->firstOrFail();
            $userProgress->stage_id += 1;
            $userProgress->save(); 
        } else {
            $status = 'Failed';
            $message = 'Ouh no, You failed the Stage. Please try again!';
            $userProgress = Progress::where('user_id', $user_id)->firstOrFail();
            $userProgress->attempt_remaining -= 1; 
            if ($userProgress->attempt_remaining < 0) {
                $userProgress->attempt_remaining = 0;
            }
            $userProgress->save(); 
        }

        return back()->with([
            'popup_status' => $status,
            'popup_message' => $message,
            'popup_home' => route('home'),
            'popup_retry' => url()->previous(),
            'popup_next' => url('/beginner'),
            'user_stage_id' => $userProgress->stage_id,
        ]);

    }
}
