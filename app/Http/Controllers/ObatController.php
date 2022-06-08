<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $hasil = DB::table('obats')->get();
        return view('obat.index',compact('nomor','hasil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_obat' => 'required',
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',

        ]);
        $hasil = DB::table('obats')->insert(
            [
                'kode_obat'=>$request['kode_obat'],
                'nama_obat'=>$request['nama_obat'],
                'jenis_obat'=>$request['jenis_obat'],
                'harga'=>$request['harga'],
                'stok'=>$request['stok'],
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
        );

        return redirect('/obat')->with('success', 'Selamat, data berhasil ditambahkan'); 
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
        $edit = DB::table('obats')->find($id);

        return view('obat.edit', compact('edit'));
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
        $edit = DB::table('obats')
        ->where('id',$id)
        ->update(
            [
                'kode_obat'=>$request['kode_obat'],
                'nama_obat'=>$request['nama_obat'],
                'jenis_obat'=>$request['jenis_obat'],
                'harga'=>$request['harga'],
                'stok'=>$request['stok'],
                'updated_at'=>now(),
            ]
        );
        return redirect('/obat')->with('success', 'Selamat, data berhasil diedit'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = DB::table('obats')
        ->where('id',$id)
        ->delete();
        return redirect('/obat')->with('success', 'Selamat, data berhasil dihapus'); 
    }
}
