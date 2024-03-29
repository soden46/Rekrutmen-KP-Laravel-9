<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\News;

class NewsAdminController extends Controller
{
    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul_artikel'     => 'required|max:255',
            'penempatan'     => 'required|max:255',
            'kategori'  => 'required',
            'isi'       => 'required',
            'foto' => ['required', 'mimes:jpg,jpeg,png', 'max:5048']
        ]);
        if ($request->file('foto')) {
            $ValidatedData['foto'] = $request->file('foto')->store('news');
        }
        $kutipan =
            $slug = SlugService::createSlug(News::class, 'slug', $request->judul_artikel);
        News::create([
            'kategori' => $request->kategori,
            'judul' => $request->judul_artikel,
            'penempatan' => $request->penempatan,
            'slug' => $request->slug,
            'foto' => $ValidatedData['foto'],
            'kutipan' => Str::limit(strip_tags($request->isi), 150),
            'isi' => $request->isi

        ]);
        return redirect('/admin/news/create')->with('success', 'Postingan Anda Berhasil Ditambahkan');
    }

    public function CheckSlug(Request $request)
    {
        $slug = SlugService::createSlug(News::class, 'slug', $request->judul_artikel);
        return response()->json(['slug' => $slug]);
    }
}
