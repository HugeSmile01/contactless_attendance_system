<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function showLoginForm()
    {
        return view('teacher.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('teacher/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showSignupForm()
    {
        return view('teacher.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:teachers',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $teacher = Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($teacher);

        return redirect()->intended('teacher/home');
    }

    public function home()
    {
        return view('teacher.home');
    }

    public function attendanceView()
    {
        return view('teacher.attendance_view');
    }

    public function recordView()
    {
        return view('teacher.record_view');
    }

    public function sectionView()
    {
        return view('teacher.section_view');
    }

    public function studentListView()
    {
        return view('teacher.student_list_view');
    }
}
