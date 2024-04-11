<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Student;
use Illuminate\Validation\ValidationException;

class StudentController extends Controller
{
    public function create(Request $request)
    {
        $messages = [
            'studentName.required' => 'Name must be filled in.',
            'email.required' => 'Email must be filled in.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been registered.',
            'password.required' => 'Password must be filled in.',
        ];

        try {
            $validatedData = $request->validate([
                'studentName' => 'required|string',
                'email' => 'required|email:rfc|unique:students,email',
                'phone' => 'nullable|string',
                'WU' => 'required_without:DD|boolean',
                'DD' => 'required_without:WU|boolean',
                'description' => 'nullable|string',
                'linkedin' => 'nullable|url',
                'portfolio' => 'nullable|url',
                'skills' => 'nullable|string',
                'education' => 'nullable|string',
                'password' => ['required', 'confirmed', 'regex:/^(?=.*[A-Z])(?=.*\d{2,}).{8,}$/']
            ], $messages);

            $user = new User;
            $user->name = $validatedData['studentName'];
            $user->email = $validatedData['email'];
            $user->password = Hash::make($validatedData['password']);
            $user->save();

            $student = new Student;
            $student->studentName = $validatedData['studentName'];
            $student->email = $validatedData['email'];
            $student->password = Hash::make($validatedData['password']);
            $student->phone = $validatedData['phone'];
            $student->WU = $validatedData['WU'] ?? false;
            $student->DD = $validatedData['DD'] ?? false;
            $student->linkedin = $validatedData['linkedin'];
            $student->portfolio = $validatedData['portfolio'];
            $student->skills = $validatedData['skills'];
            $student->save();

            return redirect()->route('login')->with(['user' => $user]);
        } catch (ValidationException $e) {
            return redirect('/')->withErrors($e->errors());
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('/')->withErrors('An unexpected error occurred.');
        }
    }

}
