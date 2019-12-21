<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function proposal(Request $request)
    {
        $uid = Auth::id();
        $did = false;
        $job_id = $request->job_id;
        $true_false = Suggestion::where('user_id', $uid)->where('job_id', $job_id)->get()->count();
        if ($true_false == 1) {
            $did = true;
        }
        return view('users/issues/proposal', ['job_id'=>$job_id, 'did'=>$did]);
    }
}
