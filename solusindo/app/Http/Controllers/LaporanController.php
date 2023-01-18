<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.index', [
            'admin' => 'laporan',
            'pesanan' => Pesanan::all()
        ]);
    }
}
