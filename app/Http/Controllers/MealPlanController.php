<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealPlanController extends Controller
{
    public function index()
    {
        return view('website.meal.index');
    }
}
