<?php

namespace App\Http\Controllers\Pelamar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\BioModel;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('pelamar.profile');
    }

    public function biodata()
    {
        return view('pelamar.biodata');
    }
    public function update(Request $request, User $user, BioModel $biomodel)
    {
        if ($request->password) {
            $password = Hash::make($request->password);
        } else {
            $password = $request->old_password;
        }
        return back()->with('success', 'Profil Anda Sukses Diperbaharui');
    }
    public function save(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'id_user' => 'required',
            'foto' => ['required', 'mimes:jpg,jpeg,png', 'max:5048'],
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'domisili' => 'required',
            'nik' => 'required',
            'nkk' => 'required',
            'nowa' => 'required',
            'no_saudara' => 'required',
        ]);
        $id_user = $request->id_user;
        if ($request->file('foto')) {
            $ValidatedData['foto'] = $request->file('foto')->store('pelamar-foto');
            User::where('id', $id_user)->update($ValidatedData);
        }
        BioModel::create([
            'id_user' => $request->id_user,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tgl_lahir' => date("Y-m-d", strtotime($request->tgl_lahir)),
            'domisili' => $request->domisili,
            'nik' => $request->nik,
            'nkk' => $request->nkk,
            'no_wa' => $request->nowa,
            'no_saudara' => $request->no_saudara,
        ]);
        return back()->with('success', 'Biodata Sukses Diperbaharui');
    }
}
