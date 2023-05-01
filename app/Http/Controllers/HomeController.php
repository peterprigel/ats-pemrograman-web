<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index() {
        // if(Auth::check()){
        //     //menarik data tabel user
        //     $data = User::orderBy('nim','asc')->get();
        //     return view('team')->with('data',$data);
        // } else {
        //     return view('index');
        // }

        return view('index');
    }

    function show() {
        if (Auth::check()) {
            //menarik data tabel user
            $data = User::orderBy('nim','asc')->get();
            return view('team')->with('data',$data);
        } else {
            return redirect('/login');
        }
        
    }

    function contact() {
        return view('contact');
    }
}