<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisteredHabitRequest;
use App\Models\RegisteredHabit;

class RegisteredHabitController extends Controller
{
    public function index() {
        // Respond with list of all registered_habits from db
        
        return RegisteredHabit::all();
    }

    public function show(RegisteredHabit $registeredHabit) {
        // Respons with registered_habit by id

        return $registeredHabit;
    }

    public function store(StoreRegisteredHabitRequest $request) {
        // Store registered_habit
        RegisteredHabit::create($request->all());

        return redirect()->back();
    }
    
    public function update(
        RegisteredHabit $registeredHabit,
        StoreRegisteredHabitRequest $request
    ) {
        // Update registered_habit
        $registeredHabit->update($request->all());

        return redirect()->back();
    }

    public function destroy(RegisteredHabit $registeredHabit) {
        // Soft Delete registered_habit from db
        $registeredHabit->delete();

        return redirect()->back();
    }
}
