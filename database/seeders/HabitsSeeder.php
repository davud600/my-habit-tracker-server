<?php

namespace Database\Seeders;

use App\Models\Habit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Read (10 pages)'
        ]);

        Habit::create([
            'name' => 'Meditate (10 min)'
        ]);

        Habit::create([
            'name' => 'Study (2 hours)'
        ]);

        Habit::create([
            'name' => 'Exercise'
        ]);

        Habit::create([
            'name' => 'Take Supplements'
        ]);
    }
}
