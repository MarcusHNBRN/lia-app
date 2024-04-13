<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Company;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($this->isCompany($credentials)) {
            if (Auth::guard('company')->attempt($credentials)) {
                return redirect()->route('company_dashboard');
            }
        }

        if ($this->isStudent($credentials)) {
            if (Auth::guard('student')->attempt($credentials)) {
                return redirect()->route('student_dashboard');
            }
        }
        return redirect()->back()->with('error', 'invalid credentials');
    }
    /**
     * Check if the user is a student.
     *
     * @param array $credentials
     * @return bool
     */
    private function isStudent(array $credentials)
    {
        $student = Student::where('email', $credentials['email'])->first();
        return $student ? true : false;
    }
    /**
     * Check if the user is a company.
     *
     * @param array $credentials
     * @return bool
     */
    private function isCompany(array $credentials)
    {
        $company = Company::where('email', $credentials['email'])->first();
        return $company ? true : false;
    }
}
