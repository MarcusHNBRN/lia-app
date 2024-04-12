<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyGalleryController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('gallery.companyGallery', compact('companies'));
    }

    public function show($companyId)
    {
        $company = Company::findOrFail($companyId);
        $companyInfo = CompanyInfo::where('companyId', $companyId)->first();
        //return view('gallery.companyDetail', compact('company'));
        return view('gallery.companyDetail', ['company' => $company, 'companyInfo' => $companyInfo]);
    }
}
