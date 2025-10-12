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
    public function showBeginnerMap()
    {
        $user_id = Auth::id();
        $progress = Progress::where('user_id', $user_id)->first();
        $currentStage = $progress->stage_id ?? 1;

        return view('beginner', compact('currentStage'));
    }
}
