<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\GoalSetController;

// Route::get('/', [HomeController::class,'index'])->name('home');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');
    //workout
    Route::get('/workout-index', [WorkoutController::class,'index'])->name('workout');
    Route::post('/workout-new', [WorkoutController::class,'newWorkout'])->name('workout.new');

    //activity
    Route::get('/activity-index', [ActivityController::class,'index'])->name('activity');

    Route::post('/new-activity', [ActivityController::class,'newActivity'])->name('activity.new');

    //goal set
    Route::get('/goal-index', [GoalSetController::class,'index'])->name('goal');
    Route::post('/new-goal', [GoalSetController::class,'newGoal'])->name('goal.new');
});
