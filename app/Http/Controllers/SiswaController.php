<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = SiswaModel::latest()->paginate(10);
        return view('pages.dashboard', compact('siswas'));
    }

    public function form()
    {
        return view('pages.form');
    }

    public function simpanSiswa(Request $request)
    {
        $data = [
            'id_user' => 1,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama
        ];
        // dd($data);
        SiswaModel::create($data);
        return redirect('/')->with('message', 'penyimpananberhasil');
    }
}
