<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoalSetController extends Controller
{
    public function index()
    {
        return view('website.goal.index');
    }
}
