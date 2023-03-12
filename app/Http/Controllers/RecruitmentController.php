<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caffe;

class RecruitmentController extends Controller
{
    public function index()
    {
        $jumlahp = Caffe::sum('jumlah_pegawai');
         $jumlahc = Caffe::get()->count();
        $caffe = Caffe::select('group_caffe')->groupBy('group_caffe')->get();
         
        return view('recruitment.home',compact('caffe','jumlahc','jumlahp'));
    }
}
