<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentInfo;
use Illuminate\Http\Request;

class selectedStudentController extends Controller
{
    public function show($studentId) {
        $student = Student::findOrFail($studentId);
        $studentInfo = StudentInfo::where('studentId', $studentId)->first();

        return view('student.show', compact('student'));
    }
}
