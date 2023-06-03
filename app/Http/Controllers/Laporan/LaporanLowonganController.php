<?php

namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use App\Models\LowonganPekerjaan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;
use App\Models\HasilPenerimaan;
use Illuminate\Http\Request;

class LaporanLowonganController extends Controller
{
    //lowongan
    public function datalowongan()
    {
        $lowongan = LowonganPekerjaan::paginate(5);
        
        return view('admin.lowongan', compact('lowongan'));
    }
    public function cetaklowongan()
    {
        $lowongan =  LowonganPekerjaan::get();
        $pdflowongan = PDF::loadView('admin.laporan.cetaklowongan', compact('lowongan'))->setPaper('a4', 'portrait');
        return $pdflowongan->stream('Laporan Data Lowongan' . '.pdf');
    }
}
