<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function recruitment()
    {
        return view('home.recruitment');
    }

    public function faq()
    {
        return view('home.faq');
    }

    public function hubungi()
    {
        return view('home.hubungi');
    }
}
