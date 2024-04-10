<?php

namespace App\Http\Controllers;

use App\Models\Company;
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
        return view('gallery.companyDetail', compact('company'));
    }
}
