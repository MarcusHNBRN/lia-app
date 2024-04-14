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

    public function edit($id)
    {
        $company = Company::findOrFail($id);

        return view('profile.company_profile_edit', ['company' => $company,]);
    }

    public function update(Request $request, $id)
    {
        $company = company::findOrFail($id);
        $validatedData = $request->validate([
            'companyName' => 'required|string',
            'email' => 'required|email|unique:companies,email,' . $company->id,
            'contactPerson' => 'required|string',
            'phone' => 'required|string',
            'description' => 'nullable|string',
            'industry' => 'nullable|string',
            'employees' => 'nullable|string',
            'language' => 'nullable|string',
            'linkedin' => 'nullable|url',
            'homepage' => 'nullable|url',
        ]);

        $company->update([
            'companyName' => $validatedData['companyName'],
            'email' => $validatedData['email'],
            'contactPerson' => $validatedData['contactPerson'],
            'phone' => $validatedData['phone'],
            'description' => $validatedData['description'],
            'industry' => $validatedData['industry'],
            'employees' => $validatedData['employees'],
            'language' => $validatedData['language'],
            'linkedin' => $validatedData['linkedin'],
            'homepage' => $validatedData['homepage'],

        ]);

        if ($request->hasFile('profile_picture')) {
            $company->profile_picture = $this->storeFile($request->file('profile_picture'));
            $company->save();
        }

        return redirect()->route('company.profile', ['id' => $company->id])->with('success', 'Profile updated successfully');
    }
    private function storeFile($file)
    {
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();

        $file->storeAs('uploads', $filename, 'public');

        return 'uploads/' . $filename;
    }
}
