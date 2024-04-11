<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Company;

class ProfileController extends Controller
{
    public function show($id)
    {
        $student = Student::find($id);
        $company = Company::find($id);

        if ($student) {
            $profileType = 'Student';
            return view('profile', compact('profileType', 'student'));
        } elseif ($company) {
            $profileType = 'Company';
            return view('profile', compact('profileType', 'company'));
        } else {
            return redirect()->back()->withErrors('Profile not found.');
        }
    }
}
