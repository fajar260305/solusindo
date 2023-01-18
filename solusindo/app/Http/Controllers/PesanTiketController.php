<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesanTiketController extends Controller
{
    public function index()
    {
        return view('pesan_tiket.homepage.index');
    }

    public function pesan()
    {
        return view('pesan_tiket.form_pesan.index');
    }

    public function addPesan(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'image' => 'required|image',
            'tempat' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'tempat_tinggal' => 'required|string',
            'kebangsaan' => 'required|string',
            'telp' => 'required|string|unique:pesanans,telp',
        ]);

        $validate['image'] = $request->file('image')->store('post-images');
        $validate['code'] = time();
        $validate['status'] = true;
        $validate['autor'] = auth()->user()->id;

        Pesanan::create($validate);

        return redirect('/home')->with('success', 'New post has been addded!');

    }

    public function tiket()
    {
        return view('pesan_tiket.homepage.tiket', [
            'admin' => 'check',
            "pesanan" => Pesanan::all()->where('autor', auth('web')->user()->id)
        ]);
    }
}
