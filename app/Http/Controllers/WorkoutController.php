<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    private $workout;
    public function index()
    {
        $this->workout = Workout::all();
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
