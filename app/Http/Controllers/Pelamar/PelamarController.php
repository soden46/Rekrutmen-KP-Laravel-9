<?php

namespace App\Http\Controllers\Pelamar;

use App\Http\Controllers\Controller;
use App\Models\Pelamar;
use App\Models\Lamaran;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PelamarController extends Controller
{
	public function index()
	{
		return view('pelamar.index');
	}
	public function lamar(Request $request)
	{
		$pelamar = Pelamar::where('id_user', Auth::user()->id)->value('id_pelamar');
		$berita = News::where('id_berita', '=', $request->id)->value('judul');
		return view('pelamar.lamaran', compact('berita', 'pelamar'));
	}

	public function store(Request $request)
	{

		$ValidatedData = $request->validate([
			'id_pelamar' => ['required'],
			'lowongan' => ['required'],
			'alamat_caffe' => ['required', 'min:6'],
			'foto' => ['required', 'mimes:jpg,jpeg,png', 'max:5048'],
			'cv' => ['required', 'mimes:pdf,PDF', 'max:2048'],
			'surat_lamaran' => ['required', 'mimes:pdf,PDF', 'max:2048']
		]);

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
			->with('success', 'Lamaran Anda Berhasil Disimpan dan Menunggu Ditindaklanjuti');
	}

	public function status()
	{
		//get posts
		$lamaran = Lamaran::where('pelamar.id_user', '=', Auth::user()->id)->join('pelamar', 'lamaran.id_pelamar', '=', 'pelamar.id_pelamar')
			->get(['lamaran.*', 'pelamar.*']);
		//render view with posts
		return view('pelamar.status', compact('lamaran'));
	}
	public function lowongan()
	{
		$news = News::where('kategori', '=', "Lowongan Kerja")->where('status_lowongan', '=', 'Lowongan Tersedia')
			->get();
		//render view with posts
		return view('pelamar.lowongan', compact('news'));
	}
}
