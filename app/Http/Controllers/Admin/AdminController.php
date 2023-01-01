<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function lamaran()
    {
        return view('admin.lamaran');
    }
    public function caffe()
    {
        return view('admin.caffe');
    }
}
