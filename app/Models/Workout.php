<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workout extends Model
{
    use HasFactory;
    private static $workout;
    private static $date;

    public static function newWorkout(Request $request)
    {
        self::$date = date("d-m-Y", strtotime($request->date));
        self::$workout = new Workout();
        self::$workout->calories_burned     = $request->calories_burned;
        self::$workout->workout_duration    = $request->workout_duration;
        self::$workout->date                = self::$date;
        self::$workout->workout_type        = $request->workout_type;
        self::$workout->save();
    }
}
