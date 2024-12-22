<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\GoalConfirm;
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
    public function statusGoal($id)
    {
        $goalStatus = Goal::find($id);
        return view('website.goal.status',compact('goalStatus'));
    }
    public function confirmGoal(Request $request,$id)
    {
        $goalStatus = Goal::find($id);
        $goalStatus->goal_status = $request->goal_status;
        $goalStatus->save();
<<<<<<< HEAD
        return redirect('/goal-index')->with('message','Goal Active Successfully');
=======
        return redirect()->back()->with('message','Goal Active Successfully');
>>>>>>> b929abb1be119a5711520c57348be10b10e33658
    }
}
