<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatorderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $riwayatOrder = DB::table('riwayatorder')->get();

        return view('riwayatOrder',['riwayatorder' => $riwayatOrder]);
    }

    // method untuk menampilkan view form tambah
    public function tambah()
    {

        // memanggil view tambah
        return view('tambah');

    }

    // method untuk insert data ke table riwayat order
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('riwayatorder')->insert([
            'nomor_order' => $request->nomor_order,
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat_pelanggan' => $request->alamat_pelanggan,
            'telp_pelanggan' => $request->telp_pelanggan,
            'status' => $request->status
        ]);
    // alihkan halaman ke halaman riwayat order
    return redirect('/riwayatOrder');
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data order berdasarkan id yang dipilih
        $riwayatOrder = DB::table('riwayatorder')->where('order_id',$id)->get();
        // passing data order yang didapat ke view edit.blade.php
        return view('edit',['riwayatorder' => $riwayatOrder]);

    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data order
        DB::table('riwayatorder')->where('order_id',$request->id)->update([
            'nomor_order' => $request->nomor_order,
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat_pelanggan' => $request->alamat_pelanggan,
            'telp_pelanggan' => $request->telp_pelanggan,
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman riwayat order
        return redirect('/riwayatOrder');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data order berdasarkan id yang dipilih
         DB::table('riwayatorder')->where('order_id',$id)->delete();
        
         // alihkan halaman ke halaman order
        return redirect('/riwayatOrder');
    }
}
