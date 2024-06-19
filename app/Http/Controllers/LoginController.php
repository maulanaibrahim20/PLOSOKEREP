<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login_proses(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('failed', 'Email atau Password Salah');
        }
    }

    public function logout (){
        Auth::logout();
        return redirect()->route('login')->with('Success','Kamu Berhasil Logout');
    }

    public function register() {
        return view('auth.register');
        
    }

    public function register_proses(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required'
        ]);
    
        $data['name'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['role'] = $request->role;  // Simpan role
    
        User::create($data);
    
        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];
    
        if (Auth::attempt($login)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('failed', 'Email atau Password Salah');
        }
    }
    
}

