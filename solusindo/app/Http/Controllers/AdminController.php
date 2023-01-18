<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.daftar_pesanan.index', [
            'admin' => 'admin',
            'pesanan' => Pesanan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $admin)
    {
        return view('admin.daftar_pesanan.edit', [
            'admin' => 'admin',
            'user' => $admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesanan $admin)
    {
        $rules = [
            'name' => 'required|max:255',
            'tempat' => 'required',
            'tanggal_lahir' => 'required',
            'kebangsaan' => 'required',
            'tempat_tinggal' => 'required',
            'telp' => 'required'
        ];

        $validateData = $request->validate($rules);
        
        Pesanan::where('id', $admin->id)->update($validateData);

        return redirect('/admin')->with('success', 'Post has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $admin)
    {
        if ($admin->image) {
            Storage::delete($admin->image);
        }

        Pesanan::destroy($admin->id);

        return redirect('/admin')->with('deleted', 'Post has been deleted!');
    }
}
