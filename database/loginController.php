<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class loginController extends Controller
{
    function index()
    {
        return view('php.index');
        // return view("index");
    }
//reques menangkap form yang ada  di index
    function login(Request $request)
    {
        //melakukan validasi data untuk login
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email belum diisi',
            'password.required' => 'Password juga diisi',
        ]);

        //membuat variabel info login yang menyimpan data email dan password kita
        $info1 =[
            'email'=> $request->email,
            'password'=> $request->password
        ];
        //melaksanakan auntentiviasi 
        if(Auth::attempt($info1)){
            // kalau sukses lanjut ke home
            // return redirect('home')->with('Sukses', 'Berhasil Login');
            return 'sukses';
        }else{
            //kalau gagal tetap di halaman login
            // return redirect('login')->withErrors('Email and Password tidak ada!!!');
            return 'gagal';
        };
    }
}
