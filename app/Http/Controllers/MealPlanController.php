<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealPlanController extends Controller
{
    public function index()
    {
        $meals = Meal::all();
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
        $foodType->foods_time   = $request->foods_time;
        $foodType->food_item    = $caloriesSum;
        $foodType->date         = $request->date;
        $foodType->save();

        return redirect()->back()->with('message','Meal add successfully');
    }
}
