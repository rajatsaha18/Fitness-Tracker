<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> b929abb1be119a5711520c57348be10b10e33658

class ActivityController extends Controller
{
    public $activity;
    public function index()
    {
<<<<<<< HEAD
        $user = Auth::user();
        $this->activity = Activity::where('user_id','=',$user->id)->get();
=======
        $this->activity = Activity::all();
>>>>>>> b929abb1be119a5711520c57348be10b10e33658
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
