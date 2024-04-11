<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Company;
use App\Models\CompanyInfo;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class CompanyController extends Controller
{
    public function create(Request $request)
    {
        $messages = [
            'companyEmail.required' => 'Email must be filled in.',
            'companyEmail.email' => 'The email must be a valid email address.',
            'companyEmail.unique' => 'The email has already been registered.',
            'password.required' => 'Password must be filled in.',
            'study.required' => 'Study must be selected.',
            'study.in' => 'Invalid study selected.',
            'availableSpots.required' => 'Available spots must be specified.',
        ];

        try {
            $validatedData = $request->validate([
                'companyName' => 'required|string',
                'companyEmail' => 'required|email|unique:companies,email',
                'contactPerson' => 'required|string',
                'phone' => 'nullable|string',
                'description' => 'required|string',
                'industry' => 'required|string',
                'employees' => 'required|string',
                'language' => 'required|string',
                'linkedin' => 'nullable|url',
                'homepage' => 'nullable|url',
                'password' => ['required', 'confirmed', 'min:8'],
            ], $messages);

            $company = new Company;
            $company->companyName = $validatedData['companyName'];
            $company->companyEmail = $validatedData['companyEmail'];
            $company->contactPerson = $validatedData['contactPerson'];
            $company->phone = $validatedData['phone'];
            $company->description = $validatedData['description'];
            $company->industry = $validatedData['industry'];
            $company->employees = $validatedData['employees'];
            $company->language = $validatedData['language'];
            $company->linkedin = $validatedData['linkedin'];
            $company->homepage = $validatedData['homepage'];
            $company->password = Hash::make($validatedData['password']);
            $company->save();


            return redirect()->route('login')->with(['company' => $company]);
        } catch (ValidationException $e) {
            return redirect('/')->withErrors($e->errors());
        } catch (\Exception $e) {
            Log::error('An unexpected error occurred: ' . $e->getMessage());
            Log::error('File: ' . $e->getFile() . ' Line: ' . $e->getLine());
            Log::error('Stack Trace: ' . $e->getTraceAsString());
            return redirect('/')->withErrors('An unexpected error occurred.');
        }
    }
}
