<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentInfo;

class StudentProfileController extends Controller
{
    public function show(Request $request, $id)
    {

        $student = Student::findOrFail($id);
        $studentInfo = StudentInfo::where('student_id', $id)->first();


        return view('profile.student_profile', ['student' => $student, 'studentInfo' => $studentInfo]);
    }
}
