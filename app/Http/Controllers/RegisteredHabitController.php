<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisteredHabitRequest;
use App\Models\RegisteredHabit;

class RegisteredHabitController extends Controller
{
    public function index() {
        return RegisteredHabit::all();
    }

    public function getRegisteredHabitsOfDate($date) {
        return RegisteredHabit::where('date', $date)
            ->get();
    }

    public function getRegisteredHabitByDateAndHabit($habit_id, $date) {
        return RegisteredHabit::where('habit_id', $habit_id)
            ->where('date', $date)
            ->get();
    }

    public function show(RegisteredHabit $registeredHabit) {
        return $registeredHabit;
    }

    public function store(StoreRegisteredHabitRequest $request) {
        RegisteredHabit::create($request->all());
    }
    
    public function update(
        RegisteredHabit $registeredHabit,
        StoreRegisteredHabitRequest $request
    ) {
        $registeredHabit->update($request->all());
    }

    public function destroy(RegisteredHabit $registeredHabit) {
        $registeredHabit->delete();
    }
}
