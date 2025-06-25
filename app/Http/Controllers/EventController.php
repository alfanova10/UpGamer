<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Menampilkan halaman detail sebuah event.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // Karena ini masih untuk hiasan, kita akan buat data palsu (dummy data)
        // Berdasarkan slug yang dikirim dari URL.

        $eventData = [];

        if ($slug === 'weekly-warriors-sale') {
            $eventData = [
                'title' => 'Weekly Warriors Sale',
                'image' => asset('img/event1.jpg'), // Path ke gambar event
                'period' => 'Hingga 31 Juli 2025',
                'tags' => ['Promo', 'Mobile Legends', 'Free Fire'],
                'content' => "
                    <p>Panggilan untuk semua pejuang di Land of Dawn dan Bermuda! Tingkatkan kekuatanmu dengan promo mingguan terbaik dari UpGamer. Selama periode event, nikmati keuntungan luar biasa untuk game favoritmu.</p>
                    
                    <h4 class='content-subtitle'>Detail Promo:</h4>
                    <ul>
                        <li><strong>Bonus 20% Diamonds:</strong> Untuk setiap pembelian 284 Diamonds Mobile Legends atau lebih. Bonus akan langsung dikirimkan ke akunmu!</li>
                        <li><strong>Diskon 15% Free Fire:</strong> Potongan harga langsung untuk semua item top up Free Fire, tanpa minimum pembelian.</li>
                        <li><strong>Weekly Mission:</strong> Selesaikan misi top up mingguan (total akumulasi Rp 100.000) untuk mendapatkan kode voucher diskon 10% tambahan untuk pembelian berikutnya.</li>
                    </ul>

                    <h4 class='content-subtitle'>Syarat & Ketentuan:</h4>
                    <ol>
                        <li>Promo berlaku untuk semua metode pembayaran.</li>
                        <li>Bonus dan diskon tidak dapat digabungkan dengan promo lainnya.</li>
                        <li>Bonus Diamonds MLBB akan dikreditkan maksimal 1x24 jam setelah transaksi berhasil.</li>
                        <li>UpGamer berhak mengubah syarat dan ketentuan sewaktu-waktu tanpa pemberitahuan sebelumnya.</li>
                    </ol>

                    <p>Jangan lewatkan kesempatan ini untuk menjadi yang terkuat! Top up sekarang dan klaim bonusmu!</p>
                "
            ];
        } 
        // Anda bisa menambahkan 'else if' untuk slug event lain di sini
        // else if ($slug === 'nama-event-lain') { ... }

        // Jika slug tidak ditemukan, arahkan ke halaman 404
        if (empty($eventData)) {
            abort(404);
        }

        return view('event.show', ['event' => $eventData]);
    }
}