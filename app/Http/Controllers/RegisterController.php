<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'nama' => ['required', 'max:255',],
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:12'
        ]);
        $ValidatedData['password'] = Hash::make($ValidatedData['password']);

        dd($ValidatedData);
        // User::create($ValidatedData);
        // return redirect('/login')
        //     ->with('success', 'Pendaftaran berhasil, Silahkan Masuk');
    }
}
