<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerjalananModel;

class PerjalananController extends Controller
{
    public function index()
    {
        $perjalanans = PerjalananModel::latest()->paginate(10);
        return view('pages.perjalanan', compact('perjalanans'));
    }

    public function form()
    {
        return view('pages.form');
    }

    public function simpanPerjalanan(Request $request)
    {
        $data = [
            'id_user' => 1,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'suhu' => $request->suhu,
            'lokasi' => $request->lokasi
        ];
        // dd($data);
        PerjalananModel::create($data);
        return redirect('/home')->with('message', 'penyimpanan berhasil');
    }
}
