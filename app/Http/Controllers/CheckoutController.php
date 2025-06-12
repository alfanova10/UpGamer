<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CheckoutController extends Controller
{
    /**
     * Menampilkan halaman checkout dengan mengambil data dari session.
     */
    public function show(Request $request): View
    {
        // 1. Ambil detail pesanan yang sebelumnya disimpan di session
        $orderDetails = $request->session()->get('order_details');

        // 2. Jika tidak ada data di session (misal, pengguna akses URL /checkout langsung),
        //    maka kembalikan pengguna ke halaman beranda.
        if (!$orderDetails) {
            abort(404, 'Sesi checkout tidak ditemukan. Silakan mulai dari halaman produk.');
        }
        
        // 3. Tampilkan view 'checkout.index' dan kirim data dari session ke dalamnya
        return view('checkout.index', [
            'game_name'  => $orderDetails['game_name'],
            'item_name'  => $orderDetails['item_name'],
            'price'      => $orderDetails['price'],
            'game_image' => $orderDetails['game_image'],
        ]);
    }
}