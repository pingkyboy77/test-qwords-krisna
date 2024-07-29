<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    function index()
    {
        return view('page.index');
    }
    function konfigurasi(Request $request, $domain)
    {
        $nama_domain = $domain;
        return view('page.konfigurasi', compact('nama_domain'));
    }
    public function invoice(Request $request)
    {
        $nama_pemesan = $request->input('nama');
        $email_pemesan = $request->input('email');
        $nama_domain = $request->input('domain');
        $harga_pesanan = $request->input('harga');

        return view('page.invoice', compact('nama_domain', 'nama_pemesan', 'email_pemesan', 'harga_pesanan'));
    }

    public function generatePDF($nama, $email, $domain, $harga)
    {
        $data = [
            'nama_domain' => $domain,
            'nama_pemesan' => $nama,
            'email_pemesan' => $email,
            'harga_pesanan' => $harga,
            'invoice_number' => 'INV-' . time(),
            'status' => 'UNPAID',
        ];
        // dd($data);
        $pdf = PDF::loadView('page.invoice_pdf', $data);

        // Stream file PDF di browser
        return $pdf->stream('invoice_' . $data['nama_domain'] . '.pdf');
    }
}
