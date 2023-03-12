<?php

namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use App\Models\DataCaffe;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;
use App\Models\HasilPenerimaan;
use Illuminate\Http\Request;

class LaporanCaffeController extends Controller
{
    //caffe
    public function laporancaffe()
    {
        $laporancaffe = DataCaffe::paginate(5);

        return view('admin.laporancaffe', compact('laporancaffe'));
    }
    public function cetakcaffe()
    {
        $cetakcaffe =  DataCaffe::get();
        $pdfcaffe = PDF::loadView('admin.laporan.cetakcaffe', compact('cetakcaffe'));
        return $pdfcaffe->stream('Laporan Caffe' . '.pdf');
    }
}
