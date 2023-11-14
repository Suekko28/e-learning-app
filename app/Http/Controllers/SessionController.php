<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){

    }

    public function login(Requset $request)
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
            return view('admin.dashboard');
        }else{
            //kalo otentikasi gaal
            return view('admin.dashboard');
        };
    }
}
