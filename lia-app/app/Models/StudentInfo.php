<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{

    protected $table = 'studentLiaInfo';

    use HasFactory;

    protected $fillable = [
        'studentId',
        'study',
        'about',
        'education',
        'work',
        'interests',
        'skills',
        'portfolio',
        'linkedin',
        'cv',
        'profile_picture',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
