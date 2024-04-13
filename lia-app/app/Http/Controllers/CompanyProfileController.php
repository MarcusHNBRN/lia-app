<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyProfileController extends Controller
{
    public function show(Request $request, $id)
    {

        $company = Company::findOrFail($id);


        return view('profile.company_profile', ['company' => $company]);
    }
}
