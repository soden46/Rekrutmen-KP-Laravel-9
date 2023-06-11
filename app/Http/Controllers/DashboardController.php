<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Pelamar;
use App\Models\Caffe;
use App\Models\LowonganPekerjaan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            abort(403);
        }
        if (auth()->user()->role == 'admin') {
            $caffe = Caffe::get()->count();
            $pelamar = Pelamar::get()->count();
            $lamaran = Lamaran::get()->count();
            $lowongan = LowonganPekerjaan::get()->count();
            return view('admin.index', compact('caffe', 'pelamar', 'lamaran', 'lowongan'));
        }
        if (auth()->user()->role == 'pelamar') {
            $caffe = Caffe::get()->count();
            $pelamar = Pelamar::get()->count();
            $lamaran = Lamaran::get()->count();
            $lowongan = LowonganPekerjaan::get()->count();
            return view('pelamar.index', compact('caffe', 'pelamar', 'lamaran', 'lowongan'));
        }
    }
}
