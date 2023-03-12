<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lamaran;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Caffe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    
    //Edit Caffe
    public function edit(Caffe $caffe, $id_caffe)
    {
        $data = Caffe::find($id_caffe);
        return view('admin.tambahcaffe.caffe', compact('data'));
    }
    
    public function update(Request $request, Caffe $caffe, $id_caffe)
    {
       $data = Caffe::find($id_caffe);
       $validatedData = $request->validate([
            'group_caffe' => 'required',
            'nama_caffe' => 'required',
            'provinsi' => 'required',
            'alamat_caffe' => 'required',
            'jumlah_pegawai' => 'required',
        ]);
		    $data->group_caffe     = $validatedData['group_caffe'];
            $data->nama_caffe     = $validatedData['nama_caffe'];
            $data->provinsi   = $validatedData['provinsi'];
            $data->alamat_caffe = $validatedData['alamat_caffe'];
            $data->jumlah_pegawai   = $validatedData['jumlah_pegawai'];
		    
        $data->save(); 
      
        return back()->with('success','Data Berhasil Diupdate');
    }

    public function destroy(Caffe $caffe, $id_caffe)
    {
        $data = Caffe::find($id_caffe);
        $data->delete();
       
        return back()
               ->with('success','Data Berhasil Dihapus');
    }
    //Edit caffe End
    
    public function rekrutmen()
    {
        $lamaran = Lamaran::first()->paginate(5);
        return view('admin.lamaran', compact('lamaran'));
    }
    
    public function caffe()
    {
        $caffe = Caffe::first()->paginate(5);
        $jumlahp = Caffe::sum('jumlah_pegawai');
         $jumlahc = Caffe::get()->count();
        return view('admin.daftarcaffe', compact('caffe', 'jumlahp' , 'jumlahc'));
    }
    
    public function cetakcaffe()
    {
        $cetakcaffe =  Caffe::get();
        $jumlahp = Caffe::sum('jumlah_pegawai');
         $jumlahc = Caffe::get()->count();
        $pdfcaffe = PDF::loadView('admin.laporan.cetakcaffe2', compact('cetakcaffe', 'jumlahp','jumlahc'));
        return $pdfcaffe->stream('Laporan Data Caffe' . '.pdf');
    }
    public function terima($id_lamaran)
    {
        $lamaran = Lamaran::find($id_lamaran);
        $lamaran->status_lamaran = "Lamaran Disetujui"; //Approved
        $lamaran->save();
        return redirect()->back(); //Redirect user somewhere

    }

    public function tolak($id_lamaran)
    {
        $lamaran = Lamaran::find($id_lamaran);
        $lamaran->status_lamaran = "Lamaran Ditolak"; //Approved
        $lamaran->save();
        return redirect()->back(); //Redirect user somewhere
    }
}
