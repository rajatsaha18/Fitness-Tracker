<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;
    private static $activity;
    private static $date;

    public static function newActivity(Request $request)
    {
        self::$date = date("d-m-Y", strtotime($request->date));
        self::$activity = new Activity();
        self::$activity->calories_burned        = $request->calories_burned;
        self::$activity->distance               = $request->distance;
        self::$activity->steps                  = $request->steps;
        self::$activity->date                   = self::$date;
        self::$activity->save();
    }
}
