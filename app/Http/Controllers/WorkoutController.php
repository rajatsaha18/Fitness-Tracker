<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> b929abb1be119a5711520c57348be10b10e33658

class WorkoutController extends Controller
{
    private $workout;
    public function index()
    {
<<<<<<< HEAD
        $user = Auth::user();
        $this->workout = Workout::where('user_id','=',$user->id)->get();
=======
        $this->workout = Workout::all();
>>>>>>> b929abb1be119a5711520c57348be10b10e33658
        return view('website.workout.index',['workouts' => $this->workout]);

    }
    public function newWorkout(Request $request)
    {
        $request->validate([
            'calories_burned'   => 'required',
            'workout_duration'  => 'required',
            'date'              => 'required',
            'workout_type'      => 'required',
        ]);
        Workout::newWorkout($request);
        return redirect()->back();
    }
}
