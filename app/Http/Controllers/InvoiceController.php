<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\invoice;
use PDF;

class InvoiceController extends Controller
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
    public function indeks()
    {
        // mengambil data dari table pegawai
        $invoice = DB::table('invoice')->get();
 
        // mengirim data pegawai ke view index
        return view('indeks',['invoice' => $invoice]);
    }
    public function cetak_pdf()
    {
        $invoice = invoice::all();
 
        $pdf = PDF::loadview('invoice_pdf',['invoice'=>$invoice]);
        return $pdf->stream();
    }
    public function edits($id)
    {
        $invoice = DB::table('invoice')->where('invoice_id',$id)->get();
        return view('edits',['invoice' => $invoice]);
    }
    // update data 
    public function update(Request $request)
    {
        // update data order
        DB::table('invoice')->where('invoice_id',$request->id)->update([
            'no_order' => $request->no_order,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'items' => $request->items,
            'total' => $request->total
        ]);
        // alihkan halaman ke halaman riwayat order
        return redirect('/invoice');
    }
}
