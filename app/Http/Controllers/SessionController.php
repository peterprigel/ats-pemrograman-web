<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index() {
        return view('login.login');
    }

    function login(Request $request){
        Session::flash('email',$request->email); //untuk kolom email biar g ilang yg udah di ketik
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('/dashboard');//->with('success','Berhasil login');
        } else {
            return redirect('login')->withErrors('Username / password anda salah! Silahkan login kembali dengan data yang benar!');
        }
    }

    function signup(){
        return view('login.signup');
    }

    function create(Request $request){
        Session::flash('name',$request->name);
        Session::flash('email',$request->email); //untuk kolom email biar g ilang yg udah di ketik
        Session::flash('nim',$request->nim);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'nim'=>'required|min:10|numeric',
            'upicture'=>'required'
            // 'image'=>'required|mimes:jpeg,jpg,png',
        ], [
            'name.required' => 'Name wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukkan email yang valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimal password 6 digit',
            'nim.required' => 'NIM wajib diisi',
            'nim.min'=>'Minimal nim 10 digit',
            'nim.numeric'=>'NIM harus berupa angka',
            'upicture.required'=>'Profile Picture wajib diisi',
            // 'image.mimes'=>'Profile Picture hanya mendukung ekstensi jpeg, jpg, dan png'
        ]);

        $image_file = $request->file('upicture');
        $image_ekstensi = $image_file->extension();
        $image_name = date('ymdhis').".".$image_ekstensi;
        $image_file->move(public_path('img/user'), $image_name);


        //variabel data ini digunakan untuk registerasi
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nim'=>$request->nim,
            'upicture'=>$image_name
        ];
        //akan membuat data baru ke database user
        User::create($data);

        //variabel infologin ini digunakan untuk login
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            //kalau otentikasi sukses
            // return 'sukses';
            return redirect('/dashboard')->with('success', Auth::user()->name.' berhasil registerasi');
        } else {
            //kalau otentikasi gagal
            // return 'gagal';
            return redirect('login');//->withErrors('Username dan Password tidak valid');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/'); //->with('success','Berhasil logout');
    }
}