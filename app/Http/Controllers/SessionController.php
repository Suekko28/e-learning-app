<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index(){

    }

    public function login(Request $request)
    {

        Session::flash('email', $request->email);

        $request->validate([
            'email'=>'required',
            'password'=>'required',

        ],[
            'email.required' => 'Email wajib diisi',
            'password.required'=> 'Password wajib disi'

        ]);
        
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            //kalau otentikasi sukses
            return redirect('admin.dashboard')->with('success', 'Berhasil Login');
        }else{
            //kalo otentikasi gaal
            return view('login')->withErorrs('Username dan password yang dimasukkan tidak valid');
        };
    }
}
