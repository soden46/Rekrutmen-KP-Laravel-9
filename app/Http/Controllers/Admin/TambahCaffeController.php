<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Caffe;
use Illuminate\Http\Request;

class TambahCaffeController extends Controller
{
    //Bento Kopi
    public function index()
    {
       return view('admin.tambahcaffe.index');
    }
    
    public function tambahcaffe(Request $request)
    {
        $this->validate($request,[
			'group' => ['required', 'max:255'],
			'nama' => ['required', 'max:255'],
			'alamat_caffe' => ['required', 'max:255'],
			'provinsi' => ['required', 'max:255'],
			'jumlah_pegawai' => ['required', 'max:255'],
		]);
		// dd($ValidatedData);
		Caffe::create([
		    'group_caffe'     => $request->group,
            'nama_caffe'     => $request->nama,
            'provinsi'      => $request->provinsi,
            'alamat_caffe'   => $request->alamat_caffe,
            'jumlah_pegawai'   => $request->jumlah_pegawai
		    ]);
		return redirect()->back()
			->with('success', 'Berhasil Menambahkan Caffe ');
    }
}
