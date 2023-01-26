<?php

namespace App\Http\Controllers\Pelamar;

use App\Http\Controllers\Controller;
use App\Models\DataPelamar;
use App\Models\Pelamar;
use App\Models\Lamaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelamarController extends Controller
{
	public function index()
	{
		return view('pelamar.index');
	}
	public function lamar()
	{
		$pelamar = Pelamar::where('id_pelamar', Auth::user()->id_pelamar)->get();
		return view('pelamar.lamaran', compact('pelamar'));
	}

	public function store(Request $request)
	{
		$pelamar = $request->id_pelamar;
		$ValidatedData = $request->validate([
			'id_pelamar' => 'required',
			'nama' => ['required', 'max:255',],
			'email' => 'required|email:dns',
			'foto' => 'required|mimes:jpg,jpeg,png|max:5048',
			'cv' => 'required|mimes:pdf,PDF|max:2048',
			'surat_lamaran' => 'required|mimes:pdf,PDF|max:2048'
		]);
		$ValidatedDataCaffe = $request->validate([
			'nama_caffe' => ['required', 'max:255',],
			'alamat_caffe' => 'required|min:6|',
		]);
		// dd($ValidatedData);
		if ($request->file('foto')) {
			$ValidatedData['foto'] = $request->file('foto')->store('lamaran-foto');
		}
		if ($request->file('cv')) {
			$ValidatedData['cv'] = $request->file('cv')->store('lamaran-cv');
		}
		if ($request->file('surat_lamaran')) {
			$ValidatedData['surat_lamaran'] = $request->file('surat_lamaran')->store('lamaran-surat_lamaran');
		}

		Lamaran::create($ValidatedData);
		$userModel = new User();
		$userData = $userModel->where('id_pelamar', '=', 'pelamar')
			->update($ValidatedDataCaffe);
		return redirect()->back()
			->with('success', 'Lamaran Anda Berhasil Disimpan dan Menunggu Tindaklanjut');
	}

	public function status()
	{
		//get posts
		$lamaran = Lamaran::where('pelamar.id_pelamar', '=', Auth::user()->id_pelamar)->join('pelamar', 'lamaran.id_pelamar', '=', 'pelamar.id_pelamar')
			->get(['lamaran.*', 'pelamar.*']);
		//render view with posts
		return view('pelamar.status', compact('lamaran'));
	}
}
