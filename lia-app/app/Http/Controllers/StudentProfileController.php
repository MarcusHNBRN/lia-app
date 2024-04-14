<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentInfo;

class StudentProfileController extends Controller
{
    public function show(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $studentInfo = StudentInfo::where('studentId', $id)->first();

        return view('profile.student_profile', ['student' => $student, 'studentInfo' => $studentInfo]);
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $studentInfo = StudentInfo::where('studentId', $id)->first();

        return view('profile.student_profile_edit', ['student' => $student, 'studentInfo' => $studentInfo]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'studentName' => 'required|string',
            'email' => 'required|email|unique:students,email,' . $id,
            'phone' => 'nullable|string',
            'study' => 'required|in:WU,DD',
            'about' => 'nullable|string',
            'education' => 'nullable|string',
            'work' => 'nullable|string',
            'interests' => 'nullable|string',
            'skills' => 'nullable|string',
            'portfolio' => 'nullable|string|url',
            'linkedin' => 'nullable|string|url',
        ]);

        $student = Student::findOrFail($id);

        $student->update([
            'studentName' => $validatedData['studentName'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
        ]);

        $studentInfo = StudentInfo::where('studentId', $id)->first();

        $studentInfo->update([
            'study' => $validatedData['study'],
            'about' => $validatedData['about'],
            'education' => $validatedData['education'],
            'work' => $validatedData['work'],
            'interests' => $validatedData['interests'],
            'skills' => $validatedData['skills'],
            'portfolio' => $validatedData['portfolio'],
            'linkedin' => $validatedData['linkedin'],
        ]);

        if ($request->hasFile('profile_picture')) {
            $studentInfo->profile_picture = $this->storeFile($request->file('profile_picture'));
            $studentInfo->save();
        }

        if ($request->hasFile('cv')) {
            $studentInfo->cv = $this->storeFile($request->file('cv'));
            $studentInfo->save();
        }




        return redirect()->route('student.profile', ['id' => $student->id])->with('success', 'Profile updated successfully');
    }
    private function storeFile($file)
    {
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();

        $file->storeAs('uploads', $filename, 'public');

        return 'uploads/' . $filename;
    }
}
