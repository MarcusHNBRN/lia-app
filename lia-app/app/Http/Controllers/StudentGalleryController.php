<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentInfo;
use Illuminate\Http\Request;

class StudentGalleryController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $studentInfos = [];

        foreach ($students as $student) {
            $studentInfo = StudentInfo::where('studentId', $student->id)->first();
            $studentInfos[$student->id] = $studentInfo;
        }

        return view('gallery.studentGallery', compact('students', 'studentInfos'));
    }

    public function show($studentId)
    {
        $student = Student::findOrFail($studentId);
        $studentInfo = StudentInfo::where('studentId', $studentId)->first();
        //return view('gallery.studentDetail', compact('student'));
        return view('gallery.studentDetail', ['student' => $student, 'studentInfo' => $studentInfo]);
    }
}
