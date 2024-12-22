<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutController extends Controller
{
    private $workout;
    public function index()
    {
        $user = Auth::user();
        $this->workout = Workout::where('user_id','=',$user->id)->get();
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
