<?php

namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;
use App\Models\HasilPenerimaan;
use Illuminate\Http\Request;

class LaporanPenerimaanController extends Controller
{
    //penerimaan
    public function datapenerimaan()
    {
        $penerimaan = HasilPenerimaan::where('status_lamaran', 'Lamaran Disetujui')->paginate(5);
        return view('admin.penerimaan', compact('penerimaan'));
    }
    public function cetaklamaran()
    {
        $penerimaan =  HasilPenerimaan::where('status_lamaran', 'Lamaran Disetujui')->get();
        $pdfpenerimaan = PDF::loadView('admin.laporan.cetak', compact('penerimaan'))->setPaper('a4', 'portrait');
        return $pdfpenerimaan->stream($penerimaan . '.pdf');
    }
}
