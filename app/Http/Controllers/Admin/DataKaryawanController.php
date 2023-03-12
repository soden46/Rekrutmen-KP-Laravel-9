<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Caffe;
use Illuminate\Http\Request;

class DataKaryawanController extends Controller
{
    //Bento Kopi
    public function bento()
    {
        $caffe = Caffe::where('group_caffe', 'Bento Kopi')->orderBy("id_caffe", "asc")->paginate(5);
        return view('admin.group.bento', compact('caffe'));
    }
    
    public function caribento(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$caffe = Caffe::where('nama_caffe','like',"%".$cari."%")->
		         orWhere('provinsi','like',"%".$cari."%")->  
		         paginate(5);
 
    		// mengirim data pegawai ke view index
		return view('admin.group.bento', compact('caffe'));
    }
    
    //Kopi Nuri
    public function nuri()
    {
        $caffe = Caffe::where('group_caffe', 'Kopi Nuri')->paginate(5);
        return view('admin.group.nuri', compact('caffe'));
    }
    
    public function carinuri(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$caffe = Caffe::where('nama_caffe','like',"%".$cari."%")->
		         orWhere('provinsi','like',"%".$cari."%")->  
		         paginate(5);
    		// mengirim data pegawai ke view index
		return view('admin.group.nuri', compact('caffe'));
    }
    
    //Njati Kopi
    public function njati()
    {
        $caffe = Caffe::where('group_caffe', 'Njati Kopi')->paginate(5);
        return view('admin.group.njati', compact('caffe'));
    }
    
    public function carinjati(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$caffe = Caffe::where('nama_caffe','like',"%".$cari."%")->
		         orWhere('provinsi','like',"%".$cari."%")->  
		         paginate(5);
 
    		// mengirim data pegawai ke view index
		return view('admin.group.njati', compact('caffe'));
    }
    
    //NUansa Kopi
    public function nuansa()
    {
        $caffe = Caffe::where('group_caffe', 'NUansa Kopi')->paginate(5);
        return view('admin.group.nuansa', compact('caffe'));
    }
    
    public function carinuansa(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$caffe = Caffe::where('nama_caffe','like',"%".$cari."%")->
		         orWhere('provinsi','like',"%".$cari."%")->  
		         paginate(5);
    		// mengirim data pegawai ke view index
		return view('admin.group.nuansa', compact('caffe'));
    }
    
    //Kopi Nuri
    public function river()
    {
        $caffe = Caffe::where('group_caffe', ' Rever Garden')->paginate(5);
        return view('admin.group.rivergarden', compact('caffe'));
    }
    
    public function caririver(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$caffe = Caffe::where('nama_caffe','like',"%".$cari."%")->paginate(5);
 
    		// mengirim data pegawai ke view index
		return view('admin.group.bento', compact('caffe'));
    }
    
    //Easy Breezy
    public function easy()
    {
        $caffe = Caffe::where('group_caffe', 'Easy Breezy')->paginate(5);
        return view('admin.group.easy', compact('caffe'));
    }
    
    public function carieasy(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$caffe = Caffe::where('nama_caffe','like',"%".$cari."%")->paginate(5);
 
    		// mengirim data pegawai ke view index
		return view('admin.group.bento', compact('caffe'));
    }
    
    //Kopisini
    public function kopisini()
    {
        $caffe = Caffe::where('group_caffe', 'Kopisini')->paginate(5);
        return view('admin.group.kopisini', compact('caffe'));
    }
    
    public function carikopisini(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$caffe = Caffe::where('nama_caffe','like',"%".$cari."%")->paginate(5);
 
    		// mengirim data pegawai ke view index
		return view('admin.group.kopisini', compact('caffe'));
    }
    
    //Menoewa Kopi
    public function menoewa()
    {
        $caffe = Caffe::where('group_caffe', 'Menoewa Kopi')->paginate(5);
        return view('admin.group.menoewa', compact('caffe'));
    }
    
    public function carimenoewa(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$caffe = Caffe::where('nama_caffe','like',"%".$cari."%")->paginate(5);
 
    		// mengirim data pegawai ke view index
		return view('admin.group.menoewa', compact('caffe'));
    }
    
    //Pendopo Malioboro
    public function pendopo()
    {
        $caffe = Caffe::where('group_caffe', 'Pendopo Malioboro')->paginate(5);
        return view('admin.group.pendopomalioboro', compact('caffe'));
    }
    
    public function caripendopo(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$caffe = Caffe::where('nama_caffe','like',"%".$cari."%")->paginate(5);
 
    		// mengirim data pegawai ke view index
		return view('admin.group.pendopomalioboro', compact('caffe'));
    }
    
    //Stako Kopi
    public function stako()
    {
        $caffe = Caffe::where('group_caffe', 'Stako kopi')->paginate(5);
        return view('admin.group.stako', compact('caffe'));
    }
    
    public function caristako(Request $request)
    {
        // menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$caffe = Caffe::where('nama_caffe','like',"%".$cari."%")->paginate(5);
 
    		// mengirim data pegawai ke view index
		return view('admin.group.stako', compact('caffe'));
    }
}
