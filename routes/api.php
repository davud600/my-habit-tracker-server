<?php

use App\Http\Controllers\HabitController;
use App\Http\Controllers\RegisteredHabitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(RegisteredHabitController::class)
    ->prefix('registered-habits')->group(function () {
        Route::get('', 'index');
        Route::get('get-registered-habits-of-date', 'getRegisteredHabitsOfDate');
        Route::get('get-registered-habit-by-habit-and-date/{habit_id}/{date}', 'getRegisteredHabitByDateAndHabit');
        Route::get('{registeredHabit}', 'show');
        Route::post('', 'store');
        Route::put('{registeredHabit}', 'update');
        Route::delete('{registeredHabit}', 'destroy');
    }
);

Route::controller(HabitController::class)
    ->prefix('habits')->group(function () {
        Route::get('', 'index');
    }
);
