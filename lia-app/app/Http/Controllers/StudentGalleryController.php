<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
        return view('gallery.studentDetail', compact('student'));
    }
}
