<?php

namespace App\Http\Controllers\Pelamar;

use App\Http\Controllers\Controller;
use App\Models\Lamaran;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
	public function index()
	{
		return view('pelamar.index');
	}
	public function lamar()
	{
		return view('pelamar.lamaran');
	}

	public function store(Request $request)
	{
		$ValidatedData = $request->validate([
			'nama' => ['required', 'max:255',],
			'email' => 'required|email:dns',
			'nama_caffe' => ['required', 'max:255',],
			'alamat_caffe' => 'required|min:6|',
			'foto' => 'required|mimes:jpg,jpeg,png|max:5048',
			'cv' => 'required|mimes:pdf,PDF|max:2048',
			'surat_lamaran' => 'required|mimes:pdf,PDF|max:2048'
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
		return redirect()->back()
			->with('success', 'Lamaran Anda Berhasil Disimpan dan Menunggu Tindaklanjut');
	}

	public function status()
	{
		//get posts
		$lamaran = Lamaran::latest()->paginate(5);
		//render view with posts
		return view('pelamar.status', compact('lamaran'));
	}
}
