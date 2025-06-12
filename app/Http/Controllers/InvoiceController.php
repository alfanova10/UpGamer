<?php

namespace App\Http\Controllers;

use App\Models\Order; // Pastikan model Order di-import
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Menampilkan halaman invoice berdasarkan ID Transaksi.
     */
    public function show($transaction_id)
    {
        // 1. Cari pesanan di database berdasarkan kolom 'transaction_id'
        //    firstOrFail() akan otomatis menampilkan halaman 404 jika tidak ditemukan.
        $order = Order::where('transaction_id', $transaction_id)->firstOrFail();

        // 2. Tampilkan view 'invoice.show' dan kirim data pesanan ('order') ke dalamnya
        return view('invoice.show', ['order' => $order]);
    }
}