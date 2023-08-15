<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Lecturer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'course_id',
        'date_time',
        'first_name',
        'last_name',
        'email',
        'password', // Make sure 'password' is included here
        // Add other columns here
    ];

    protected $hidden = [
        'password', // Hide the password field when retrieving the model
        'remember_token',
    ];

    protected $casts = [
        'date_time' => 'datetime', // Cast date_time column to datetime
        'email_verified_at' => 'datetime',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class); // Define the relationship with the Course model
    }
}
