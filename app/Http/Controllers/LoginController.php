<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }
    
    public function index()
    {
        return view('login.index', [
            'judul' => 'Login',
            'active' => 'login'
        ]);
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        // dd('berhasil login');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('error', 'Login Error');
    }


    public function logout()
    {
        Auth::logout();
        Request()->session()->invalidate();
        Request()->session()->regenerate();

        return redirect('/login');
    }
}
