<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class CheckInController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::latest();
        if (request('search')) {
            $pesanan->where('code', request('search'));
        }

        return view('admin.check_in.index', [
            'admin' => 'check',
            "pesanan" => $pesanan->get()
        ]);
    }

    public function addCheckin($id)
    {
        $rules = [
            'status' => ''
        ];
        $rules['status'] = false;

        Pesanan::find($id)->update($rules);

        return redirect('/check_in')->with('success', 'Pesanan telah di check in!');
    }
}
