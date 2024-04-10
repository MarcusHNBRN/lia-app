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

    public function show($companyId)
    {
        $company = Student::findOrFail($companyId);
        return view('gallery.studentDetail', compact('student'));
    }
}
