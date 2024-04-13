<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\StudentInfo;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('student')->attempt($credentials)) {
            return redirect()->route('student.dashboard');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function create(Request $request)
    {
        $messages = [
            'studentName.required' => 'Name must be filled in.',
            'email.required' => 'Email must be filled in.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been registered.',
            'password.required' => 'Password must be filled in.',
            'phone.required' => 'Phone number must be specified.',
            'study.required' => 'Study must be specified.',
            'study.in' => 'Invalid study type.',
        ];

        try {
            $validatedData = $request->validate([
                'studentName' => 'required|string',
                'email' => 'required|email|unique:students,email',
                'password' => ['required', 'confirmed', 'min:8'],
                'phone' => 'nullable|string',
                'study' => 'required|in:WU,DD',
                'about' => 'nullable|string',
                'education' => 'nullable|string',
                'work' => 'nullable|string',
                'interests' => 'nullable|string',
                'skills' => 'nullable|string',
                'portfolio' => 'nullable|string|url',
                'linkedin' => 'nullable|string|url',
            ], $messages);

            $student = new Student;
            $student->studentName = $validatedData['studentName'];
            $student->email = $validatedData['email'];
            $student->password = Hash::make($validatedData['password']);
            $student->phone = $validatedData['phone'];
            $student->save();


            $studentLiaInfo = new StudentInfo;
            $studentLiaInfo->studentId = $student->id;
            $studentLiaInfo->study = $validatedData['study'];
            $studentLiaInfo->about = $validatedData['about'];
            $studentLiaInfo->education = $validatedData['education'];
            $studentLiaInfo->work = $validatedData['work'];
            $studentLiaInfo->interests = $validatedData['interests'];
            $studentLiaInfo->skills = $validatedData['skills'];
            $studentLiaInfo->portfolio = $validatedData['portfolio'];
            $studentLiaInfo->linkedin = $validatedData['linkedin'];
            if ($request->hasFile('profile_picture')) {
                $studentLiaInfo->profile_picture = $this->storeFile($request->file('profile_picture'));
            }
            if ($request->hasFile('cv')) {
                $studentLiaInfo->cv = $this->storeFile($request->file('cv'));
            }
            $studentLiaInfo->save();

            return redirect()->route('login')->with(['student' => $student]);
        } catch (ValidationException $e) {
            return redirect('/')->withErrors($e->errors());
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect('/')->withErrors('An unexpected error occurred.');
        }
    }

    private function storeFile(UploadedFile $file)
    {
        return $file->get();
    }
}
