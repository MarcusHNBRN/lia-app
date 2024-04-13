<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Company;

class DashboardController extends Controller
{
    public function studentDashboard()
    {
        $student = Auth::guard('student')->user();
        return view('dashboard.student_dashboard', compact('student'));
    }

    public function companyDashboard()
    {
        $company = Auth::guard('company')->user();
        return view('dashboard.company_dashboard', compact('company'));
    }
}
