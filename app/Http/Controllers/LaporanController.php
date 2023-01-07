<?php

namespace App\Http\Controllers;

use App\Models\DataCaffe;
use App\Models\DataPelamar;
use App\Models\LowonganPekerjaan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;
use App\Models\HasilPenerimaan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function datapenerimaan()
    {
        $penerimaan = HasilPenerimaan::where('status_lamaran', 'Lamaran Disetujui')->paginate(5);
        return view('admin.penerimaan', compact('penerimaan'));
    }
    public function datapelamar()
    {
        $pelamar = DataPelamar::select("*")
            ->get()
            ->toArray();

        return view('admin.pelamar', compact('pelamar'));
    }
    public function cetaklamaran()
    {
        $penerimaan =  HasilPenerimaan::where('status_lamaran', 'Lamaran Disetujui')->get();
        $pdf = PDF::loadView('admin.cetak', compact('penerimaan'))->setPaper('a4', 'portrait');
        $fileName = $penerimaan;
        return $pdf->stream($penerimaan . '.pdf');
    }
}
