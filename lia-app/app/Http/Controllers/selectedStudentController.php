<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class selectedStudentController extends Controller
{
    public function show($studentId) {
        $company = Student::findOrFail($studentId);
        return view('company.show', compact('company'));
    }
}
