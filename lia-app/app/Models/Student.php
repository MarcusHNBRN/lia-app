<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class Student extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'students';

    protected $fillable = [
        'studentName',
        'email',
        'password',
        'age',
    ];


    public function StudentInfo()
    {
        return $this->hasOne(StudentInfo::class);
    }


    public $timestamps = false;
}
