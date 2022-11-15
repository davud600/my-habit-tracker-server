<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisteredHabit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'habit_id',
    ];

    protected $with = [
        'habit'
    ];

    public function habit() {
        return $this->belongsTo(Habit::class);
    }
}
