<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('admin.login.login');
    }

    public function dologin(Request $request)
    {


       // dd($request->post());
        $result = Auth::attempt(['username' => $request->username, 'password' => $request->password]);
//        dump(Auth::user());
//        dump(Auth::id());
//        dd($result);

        if ($result) {
            return redirect('admin');
        } else {
            return redirect()->back();
        }
    }

    }
