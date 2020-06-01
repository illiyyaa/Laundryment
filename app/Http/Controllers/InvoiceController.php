<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Invoice;
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
}
