<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {   
        return view('Auth.login');
    }
    
    public function authenticate(Request $request)
    {   
        
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
       
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])) {
            return redirect()->intended('admin/dashboard');
        }

        $notification = array(
            'title' => 'Erro ao fazer login',
            'message' => 'E-mail / senha não encontrado!',
            'alert-type' => 'info'
        );
        return back()->with($notification)->withInput();
    }

    public function logout (Request $request) {
       
        Auth::logout();
        return redirect('/');
    }
}
