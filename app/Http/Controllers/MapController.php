<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Progress;
use App\Models\UserRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class MapController extends Controller
{

    public function home()
    {
        $user_id = auth()->id();
        $progress = Progress::where('user_id', $user_id)->first();
        $currentStage = $progress->stage_id ?? 1;

        return view('home', compact('currentStage'));
    }


    public function showBeginnerMap()
    {
        $user_id = Auth::id();
        $progress = Progress::where('user_id', $user_id)->first();
        $currentStage = $progress->stage_id ?? 1;

        return view('beginner', compact('currentStage'));
    }

    public function showElementaryMap()
    {
        $user_id = Auth::id();
        $progress = Progress::where('user_id', $user_id)->first();
        $currentStage = $progress->stage_id;

        return view('elementary', compact('currentStage'));
    }

    public function showIntermediateMap()
    {
        $user_id = Auth::id();
        $progress = Progress::where('user_id', $user_id)->first();
        $currentStage = $progress->stage_id ?? 1;

        return view('intermediate', compact('currentStage'));
    }

    public function showAdvanceMap()
    {
        $user_id = Auth::id();
        $progress = Progress::where('user_id', $user_id)->first();
        $currentStage = $progress->stage_id ?? 1;

        return view('advance', compact('currentStage'));
    }
}
