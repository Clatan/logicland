<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Progress;

class QuestionController extends Controller
{
    // public function getAttempts()
    // {
    //     $user_id = auth()->id();
    //     $progress = Progress::where('user_id', $user_id)->first();

    //     // $max_attempts = 3;
    //     // $attempt_remaining = $progress->attempt_remaining;
    //     // $last_update = $progress->updated_at;

    //     // // hitung tambahan attempt
    //     // $minutesSinceUpdate = now()->diffInMinutes($last_update);
    //     // $regenAttempts = floor($minutesSinceUpdate / 30); // 1 attempt per 30 menit

    //     // $attempt_remaining = min($attempt_remaining + $regenAttempts, $max_attempts);

    //     // // hitung sisa detik sampai next attempt
    //     // $nextAttemptInSec = ($regenAttempts < $max_attempts - $progress->attempt_remaining) ?
    //     //     30*60 - ($minutesSinceUpdate % 30)*60 : null;

    //     return response()->json([
    //         'attempt_remaining' => $attempt_remaining,
    //         // 'next_attempt_in_sec' => $nextAttemptInSec
    //     ]);
    // }

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
        } else if (str_contains($currentUrl, 'elementary')) {
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
        } else if (str_contains($currentUrl, 'intermediate')) {
            $level = 'intermediate';

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
        } else if (str_contains($currentUrl, 'advance')) {
            $level = 'advance';

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
        $user_id = auth()->id();

        if ($answer === $question->question_answer) {
            $status = 'Success';
            $userProgress = Progress::where('user_id', $user_id)->firstOrFail();
            $userProgress->stage_id += 1;
            $userProgress->save(); 
        } else {
            $status = 'Failed';
            $userProgress = Progress::where('user_id', $user_id)->firstOrFail();
            $userProgress->attempt_remaining -= 1; 
            if ($userProgress->attempt_remaining < 0) {
                $userProgress->attempt_remaining = 0;
            }
            $userProgress->save(); 
        }

        // Simpan status + tombol ke session
        return back()->with([
            'popup_status' => $status,
            'popup_home' => route('home'),
            'popup_retry' => url()->previous(),
            'popup_next' => url('/beginner'),
        ]);

    }
}
