<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> b929abb1be119a5711520c57348be10b10e33658

class MealPlanController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $user   = Auth::user();
        $meals  = Meal::where('user_id','=',$user->id)->get();
=======
        $meals = Meal::all();
>>>>>>> b929abb1be119a5711520c57348be10b10e33658
        return view('website.meal.index',compact('meals'));
    }
    public function newMeal(Request $request)
    {
        $request->validate([
            'food_item'     => 'required|array',
            'food_item.*'   => 'integer',
            'date'          => 'required',
            'foods_time'    => 'required',
        ]);

        $foodItem = $request->input('food_item');

        $caloriesSum = array_sum($foodItem);

        $foodType = new Meal();
<<<<<<< HEAD
        $foodType->user_id      = Auth::id();
=======
>>>>>>> b929abb1be119a5711520c57348be10b10e33658
        $foodType->foods_time   = $request->foods_time;
        $foodType->food_item    = $caloriesSum;
        $foodType->date         = $request->date;
        $foodType->save();

        return redirect()->back()->with('message','Meal add successfully');
    }
}
