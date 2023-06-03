<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Caffe;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function detail($group_caffe)
    {
        $caffe = Caffe::where('group_caffe',$group_caffe)->get();
        $group = Caffe::distinct()->where('group_caffe',$group_caffe)->get(['group_caffe']);

        return view('home.recruitmentcontent',compact('caffe','group'));
    }
    
    public function recruitment()
    {
        //ambil data per group caffe 
        $caffe = Caffe::select('group_caffe', Caffe::raw('count(*) as total'))
                 ->groupBy('group_caffe')
                 ->get();
        $kafe = Caffe::select('group_caffe', $caffe);
        $jumlahp = Caffe::where('group_caffe','=',$kafe);
        $jumlahc = Caffe::where('group_caffe','=',$kafe);
        $jumlahp2 = Caffe::where('group_caffe','=','Nuansa Kopi')->sum('jumlah_pegawai');
        $jumlahc2 = Caffe::where('group_caffe','=','Nuansa Kopi')->get()->count();
        $jumlahp3 = Caffe::where('group_caffe','=','Easy Breezy')->sum('jumlah_pegawai');
        $jumlahc3 = Caffe::where('group_caffe','=','Easy Breezy')->get()->count();
        $jumlahp4 = Caffe::where('group_caffe','=','Kopi Nuri')->sum('jumlah_pegawai');
        $jumlahc4 = Caffe::where('group_caffe','=','Kopi Nuri')->get()->count();
        $jumlahp5 = Caffe::where('group_caffe','=','Kopi Nuri')->sum('jumlah_pegawai');
        $jumlahc5 = Caffe::where('group_caffe','=','Kopi Nuri')->get()->count();
        $jumlahp6 = Caffe::where('group_caffe','=','Kopi Nuri')->sum('jumlah_pegawai');
        $jumlahc6 = Caffe::where('group_caffe','=','Kopi Nuri')->get()->count();
        $jumlahp7 = Caffe::where('group_caffe','=','Kopi Nuri')->sum('jumlah_pegawai');
        $jumlahc7 = Caffe::where('group_caffe','=','Kopi Nuri')->get()->count();
        $jumlahp8 = Caffe::where('group_caffe','=','Kopi Nuri')->sum('jumlah_pegawai');
        $jumlahc8 = Caffe::where('group_caffe','=','Kopi Nuri')->get()->count();
        return view('home.recruitment',compact('caffe','kafe','jumlahp','jumlahp2','jumlahp3','jumlahp4','jumlahp5','jumlahp6','jumlahp7','jumlahp8','jumlahc','jumlahc2','jumlahc3','jumlahc4','jumlahc5','jumlahc6','jumlahc7','jumlahc8'));
    }

    public function faq()
    {
        return view('home.faq');
    }

    public function hubungi()
    {
        return view('home.hubungi');
    }
}
