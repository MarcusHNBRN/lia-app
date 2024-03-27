<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $credatials = $request->only('email', 'password');

        if (Auth::attempt($credatials)) {
            return redirect()->route('dashboard');
        }
        return redirect()->back()->with('erroe', 'invalid credentials');
    }
}
