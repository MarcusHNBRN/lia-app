<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Company;
use Illuminate\Http\UploadedFile;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('company')->attempt($credentials)) {
            return redirect()->route('company.dashboard');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function create(Request $request)
    {
        $messages = [
            'email.required' => 'Email must be filled in.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been registered.',
            'password.required' => 'Password must be filled in.',
            'study.required' => 'Study must be selected.',
            'study.in' => 'Invalid study selected.',
            'availableSpots.required' => 'Available spots must be specified.',
        ];

        try {
            $validatedData = $request->validate([
                'companyName' => 'required|string',
                'email' => 'required|email|unique:companies,companyEmail',
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
            $company->email = $validatedData['email'];
            $company->contactPerson = $validatedData['contactPerson'];
            $company->phone = $validatedData['phone'];
            $company->description = $validatedData['description'];
            $company->industry = $validatedData['industry'];
            $company->employees = $validatedData['employees'];
            $company->language = $validatedData['language'];
            $company->linkedin = $validatedData['linkedin'];
            $company->homepage = $validatedData['homepage'];
            $company->password = Hash::make($validatedData['password']);
            if ($request->hasFile('profile_picture')) {
                $company->profile_picture = $this->storeFile($request->file('profile_picture'));
            }
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
    private function storeFile(UploadedFile $file)
    {
        return $file->get();
    }
}
