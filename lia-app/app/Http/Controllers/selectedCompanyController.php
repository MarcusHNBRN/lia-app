<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class selectedCompanyController extends Controller
{
    public function show($companyId) {
        $company = Company::findOrFail($companyId);
        return view('company.show', compact('company'));
    }
}
