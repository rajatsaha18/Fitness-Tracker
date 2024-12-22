<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Goal extends Model
{
    use HasFactory;

    private static $goal;
    private static $start_date;
    private static $end_date;

    public static function newGoalSet($request)
    {
        self::$start_date   = date("d-m-Y", strtotime($request->start_date));
        self::$end_date     = date("d-m-Y", strtotime($request->end_date));

        self::$goal = new Goal();
        self::$goal->description            = $request->description;
        self::$goal->user_id                = Auth::id();
        self::$goal->description            = $request->description;
        self::$goal->start_date             = self::$start_date;
        self::$goal->end_date               = self::$end_date;
        self::$goal->save();
    }
}
