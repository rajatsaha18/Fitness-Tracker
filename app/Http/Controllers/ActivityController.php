<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    public $activity;
    public function index()
    {
        $user = Auth::user();
        $this->activity = Activity::where('user_id','=',$user->id)->get();
        return view('website.activity.index',[
            'activities' => $this->activity
        ]);
    }
    public function newActivity(Request $request)
    {
        $request->validate([
            'calories_burned'   => 'required',
            'distance'          => 'required',
            'steps'             => 'required',
            'date'              => 'required',
        ]);

        Activity::newActivity($request);
        return redirect()->back()->with('message','Activity Set Successfully');
    }
}
