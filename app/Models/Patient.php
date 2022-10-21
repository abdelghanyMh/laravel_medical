<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;



class Patient extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'noSSocial',
        'dob',
        'phone',
        'email',
        'diseases',
        'allergies',
        'background',
    ];

    public function scans()
    {
        return $this->hasMany(Scan::class);
    }

    public function orientationLtrs()
    {
        return $this->hasMany(OrientationLetter::class);
    }
}
