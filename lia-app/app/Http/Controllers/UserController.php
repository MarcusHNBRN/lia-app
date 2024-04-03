<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $messages = [
            'name.required' => 'Username must be filled in.',
            'email.required' => 'Email must be filled in.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been registered.',
            'password.required' => 'Password must be filled in.',
            'password.regex' => 'The password must be at least 8 characters long, and must contain at least one uppercase letter and at least 2 digits.'
        ];

        try {
            $validatedData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email:rfc|unique:users,email',
                'password' => ['required', 'regex:/^(?=.*[A-Z])(?=.*\d{2,}).{8,}$/']
            ], $messages);

            $user = new User;
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->password = Hash::make($validatedData['password']);
            $user->save();

            return redirect()->route('login')->with(['user' => $user]);
        } catch (ValidationException $e) {
            return redirect('/')->withErrors($e->errors());
        } catch (\Exception $e) {
            return redirect('/')->withErrors('An unexpected error occurred.');
        }
    }
}
