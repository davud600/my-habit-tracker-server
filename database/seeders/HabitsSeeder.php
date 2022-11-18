<?php

namespace Database\Seeders;

use App\Models\Habit;
use Illuminate\Database\Seeder;

class HabitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Habit::create([
            'id' => 1,
            'name' => 'Read (10 pages)'
        ]);

        Habit::create([
            'id' => 2,
            'name' => 'Meditate (10 min)'
        ]);

        Habit::create([
            'id' => 3,
            'name' => 'Study (2 hours)'
        ]);

        Habit::create([
            'id' => 4,
            'name' => 'Exercise'
        ]);

        Habit::create([
            'id' => 5,
            'name' => 'Take Supplements'
        ]);

        Habit::create([
            'id' => 6,
            'name' => 'Journal'
        ]);
    }
}
