<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'studentName',
        'email',
        'password',
        'age',
    ];


    public function StudentliaInfo()
    {
        return $this->hasOne(StudentInfo::class);
    }


    public $timestamps = false;

}
