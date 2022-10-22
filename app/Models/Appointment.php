<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'date',
        'start_time',
        'end_time',
        'motivation',
        'user_id',
    ];

    // Return the patient for whom this appointment was scheduled
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    // Return the doctor for whom this appointment was scheduled
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
