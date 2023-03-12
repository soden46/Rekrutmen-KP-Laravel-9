<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class invesmenController extends Controller
{
    public function index()
    {
        return view('invesmen.index');
    }

}
