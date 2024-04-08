<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Company;
use Illuminate\Validation\ValidationException;

class CompanyController extends Controller
{
    public function create(Request $request)
    {
        $messages = [
            'companyName.required' => 'Company name must be filled in.',
            'companyEmail.required' => 'Email must be filled in.',
            'companyEmail.email' => 'The email must be a valid email address.',
            'companyEmail.unique' => 'The email has already been registered.',
            'password.required' => 'Password must be filled in.',
            'class.required' => 'Class must be selected.',
            'class.in' => 'Invalid class selected.',
            'availableSpots.required' => 'Available spots must be specified.',
        ];

        try {
            $validatedData = $request->validate([
                'companyName' => 'required|string',
                'companyEmail' => 'required|email:rfc|unique:companies,email',
                'password' => ['required', 'confirmed', 'min:8'],
                'description' => 'nullable|string',
                'address' => 'nullable|string',
                'class' => 'required|in:WU,DD',
                'availableSpots' => 'required|integer',
                'email' => 'required|email',
                'phone' => 'nullable|string',
            ], $messages);

            $company = new Company;
            $company->companyName = $validatedData['companyName'];
            $company->companyEmail = $validatedData['companyEmail'];
            $company->password = Hash::make($validatedData['password']);
            $company->availableSpots = $validatedData['availableSpots'];
            $company->email = $validatedData['email'];
            $company->save();

            return redirect()->route('login')->with(['message' => 'Company registered successfully']);
        } catch (ValidationException $e) {
            return redirect('/')->withErrors($e->errors());
        } catch (\Exception $e) {
            return redirect('/')->withErrors('An unexpected error occurred.');
        }
    }
}
