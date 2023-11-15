<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index()
    {
    }


    public function login(Request $request)
    {

        Session::flash('email', $request->email);

        $request->validate([
            'email'=>'required',
            'password'=>'required',

        ],[
            'email.required' => 'Email wajib diisi',
            'password.required'=> 'Password wajib diisi'

        ]);
        
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            //kalau otentikasi sukses
            return redirect('admin/dashboard');
        }else{
            //kalo otentikasi gaal
            return redirect('login')->withErrors('Username dan password yang dimasukkan tidak valid');
        };
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    function register()
    {
        return view('auth.register');
    }

    function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',

        ],[
            'name.required' => 'Email wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukkan email yang valid',
            'email.unique'=> 'Email sudah pernah digunakan, silahkan pilih email yang lain',
            'password.required'=> 'Password wajib diisi',
            'password.min' => 'Minimal password yang diizinkan adalah 6 karakter'

        ]);

        $data = [
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        User::create($data);
        
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            //kalau otentikasi sukses
            return redirect('admin/dashboard');
        }else{
            //kalo otentikasi gaal
            return redirect('login')->withErrors('Username dan password yang dimasukkan tidak valid');
        };
        
    }
}
