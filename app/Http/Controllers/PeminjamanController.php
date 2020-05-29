<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Peminjaman;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', ['peminjaman' => $peminjaman]);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$peminjaman = new Peminjaman;
        //$peminjaman->nama = $request->nama;
        //$peminjaman->username = $request->username;
        //$peminjaman->nim = $request->nim;
        //$peminjaman->judul_buku = $request->judul_buku;
        //$peminjaman->penerbit = $request->penerbit;

        //$student->save();
        Peminjaman::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'nim' => $request->nim,
            'judul_buku' => $request->judul_buku,
            'penerbit' => $request->penerbit
        ]);

        return redirect('/peminjaman');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
