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
        return view('gallery.studentGallery', compact('students'));
    }

    public function show($studentId)
    {
        $student = Student::findOrFail($studentId);
        $studentInfo = StudentInfo::where('studentId', $studentId)->first();
        //return view('gallery.studentDetail', compact('student'));
        return view('gallery.studentDetail', ['student' => $student, 'studentInfo' => $studentInfo]);
    }
}
