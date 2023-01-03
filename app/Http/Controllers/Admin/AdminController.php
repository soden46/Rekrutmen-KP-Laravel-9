<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lamaran;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function rekrutmen()
    {
        $lamaran = Lamaran::latest()->paginate(5);
        return view('admin.lamaran', compact('lamaran'));
    }
    public function caffe()
    {
        return view('admin.caffe');
    }
    public function terima($id)
    {
        $lamaran = Lamaran::find($id);
        $lamaran->status = "Lamaran Disetujui"; //Approved
        $lamaran->save();
        return redirect()->back(); //Redirect user somewhere
    }

    public function tolak($id)
    {
        $lamaran = Lamaran::find($id);
        $lamaran->status = "Lamaran Ditolak"; //Approved
        $lamaran->save();
        return redirect()->back(); //Redirect user somewhere
    }
}
