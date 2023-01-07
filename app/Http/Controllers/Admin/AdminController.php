<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lamaran;
use App\Models\Caffe;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function rekrutmen()
    {
        $lamaran = Lamaran::first()->paginate(5);
        return view('admin.lamaran', compact('lamaran'));
    }
    public function caffe()
    {
        $caffe = Caffe::latest()->paginate(5);
        return view('admin.daftarcaffe', compact('caffe'));
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
