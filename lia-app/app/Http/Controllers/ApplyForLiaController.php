<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class ApplyForLiaController extends Controller
{
    public function ApplyForLia($companyId)
    {
        $company = Company::findOrFail($companyId);
        return view('/gallery/applyForLia', $company);
    }
}
