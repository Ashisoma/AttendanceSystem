<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [
        'name',
        // Add other columns here
    ];

    // Define relationship with Lecturer model
    public function lecturers()
    {
        return $this->hasMany(Lecturer::class);
    }

    // Define relationship with Student model
    public function students()
    {
        return $this->belongsToMany(Students::class, 'course_student');
    }
}
