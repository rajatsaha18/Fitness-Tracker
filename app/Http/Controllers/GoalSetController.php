<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use Illuminate\Http\Request;

class GoalSetController extends Controller
{
    public function index()
    {
        $goals = Goal::all();
        return view('website.goal.index',compact('goals'));
    }
    public function newGoal(Request $request)
    {
        $request->validate([
            'description'   => 'required',
            'start_date'    => 'required',
            'end_date'      => 'required',
        ]);
        Goal::newGoalSet($request);
        return redirect()->back()->with('message','Goal Set Successfully');
    }
}
