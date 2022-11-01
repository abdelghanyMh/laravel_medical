<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'scan_path',
        'user_id',
    ];

    // Return the patient for whom this scan was performed 
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
