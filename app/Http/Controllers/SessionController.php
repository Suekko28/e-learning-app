<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        if (auth()->attempt($credentials)) {
            session(["token" => auth()->user()->createToken($request->email)->plainTextToken]);
            if (auth()->user()->role == 2) {
                return redirect()->route('home');
            } else {
                return redirect('/admin/dashboard');
            }
        } else {
            return redirect()->back()->withErrors('Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $request->validate([
            'name' => 'required|min:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'Nama wajib diisi',
            'name.min' => 'Minimal nama yang diizinkan adalah 10 karakter',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukkan email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, silahkan pilih email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimal password yang diizinkan adalah 6 karakter',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 2, // Set the role to 2 for regular users

        ]);

        Auth::login($user);

        return redirect('home')->with('success', $user->name . ' berhasil login');
    }
}
