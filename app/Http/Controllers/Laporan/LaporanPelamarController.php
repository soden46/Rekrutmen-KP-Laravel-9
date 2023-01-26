<?php

namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use App\Models\DataPelamar;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;
use App\Models\HasilPenerimaan;
use Illuminate\Http\Request;

class LaporanPelamarController extends Controller
{

    //pelamar
    public function datapelamar()
    {
        $pelamar = DataPelamar::paginate(5);

        return view('admin.pelamar', compact('pelamar'));
    }
    public function cetakpelamar()
    {
        $pelamar =  DataPelamar::get();
        $pdfpelamar = PDF::loadView('admin.cetakpelamar', compact('pelamar'))->setPaper('a4', 'portrait');
        return $pdfpelamar->stream($pelamar . '.pdf');
    }
}
