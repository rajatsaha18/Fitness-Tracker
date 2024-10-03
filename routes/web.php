<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\GoalSetController;
use App\Http\Controllers\MealPlanController;

Route::redirect('/','login');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');
    //workout
    Route::get('/workout-index', [WorkoutController::class,'index'])->name('workout');
    Route::post('/workout-new', [WorkoutController::class,'newWorkout'])->name('workout.new');

    //activity
    Route::get('/activity-index', [ActivityController::class,'index'])->name('activity');

    Route::post('/new-activity', [ActivityController::class,'newActivity'])->name('activity.new');

    //goal set
    Route::post('/new-goal', [GoalSetController::class,'newGoal'])->name('goal.new');
    Route::get('/goal-index', [GoalSetController::class,'index'])->name('goal');
    Route::get('/goal-status/{id}', [GoalSetController::class,'statusGoal'])->name('goal.status');
    Route::post('/goal-confirm/{id}', [GoalSetController::class,'confirmGoal'])->name('goal.confirm');

    //meal plan
    Route::get('/meal-index', [MealPlanController::class,'index'])->name('meal.plan');
});
