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
        // Data event kita simpan di sini
        $allEvents = [
            // ===================================
            // EVENT 1: WEEKLY WARRIORS SALE
            // ===================================
            'weekly-warriors-sale' => [
                'title' => 'Weekly Warriors Sale',
                'image' => asset('img/event1.jpg'),
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
            ],

            // ================================================
            // ▼▼▼ EVENT 2: TURNAMEN PUBG MOBILE (BARU) ▼▼▼
            // ================================================
            'turnamen-pubg-mobile' => [
                'title' => 'Turnamen PUBG Mobile',
                'image' => asset('img/event2.jpg'), // Pastikan gambar event2.jpg ada
                'period' => '15 - 17 Juli 2025',
                'tags' => ['Turnamen', 'PUBG Mobile', 'Kompetitif'],
                'content' => "
                    <p>Buktikan bahwa squad Anda adalah yang terbaik di UpGamer Community Tournament! Pertarungan sengit, strategi jitu, dan Chicken Dinner menanti Anda. Daftarkan tim Anda sekarang dan rebut total hadiah jutaan Rupiah!</p>
                    <h4 class='content-subtitle'>Detail Turnamen:</h4>
                    <ul>
                        <li><strong>Game:</strong> PUBG Mobile</li>
                        <li><strong>Mode:</strong> Squad - TPP</li>
                        <li><strong>Peta:</strong> Erangel, Miramar, Sanhok (Kualifikasi & Final)</li>
                        <li><strong>Biaya Pendaftaran:</strong> GRATIS! Cukup dengan melakukan top up minimal 250 UC di UpGamer selama periode pendaftaran.</li>
                        <li><strong>Total Hadiah:</strong> Rp 10.000.000</li>
                    </ul>
                    <h4 class='content-subtitle'>Syarat & Ketentuan:</h4>
                    <ol>
                        <li>Satu tim terdiri dari 4 anggota inti dan 1 cadangan.</li>
                        <li>Semua peserta wajib menjunjung tinggi sportivitas.</li>
                        <li>Dilarang menggunakan cheat, bug, atau program ilegal lainnya. Tim yang melanggar akan didiskualifikasi.</li>
                        <li>Jadwal pertandingan akan diumumkan di grup Discord setelah pendaftaran ditutup.</li>
                    </ol>
                    <p>Tunggu apa lagi? Ajak teman-temanmu dan jadilah juara!</p>
                "
            ],

            // ================================================
            // ▼▼▼ EVENT 3: GEBYAR GIVEAWAY (BARU) ▼▼▼
            // ================================================
            'gebyar-juli-giveaway' => [
                'title' => 'Giveaway Gebyar Juli',
                'image' => asset('img/event3.jpg'), // Pastikan gambar event3.jpg ada
                'period' => '1 - 30 Juli 2025',
                'tags' => ['Giveaway', 'Genshin Impact', 'Hadiah'],
                'content' => "
                    <p>Rayakan bulan Juli dengan hadiah fantastis dari UpGamer! Dapatkan kesempatan untuk memenangkan hadiah utama iPhone 12 Pro Max dan ribuan Genesis Crystal hanya dengan melakukan top up game favoritmu.</p>
                    <h4 class='content-subtitle'>Cara Mengikuti:</h4>
                    <ol>
                        <li>Lakukan transaksi top up game apa saja di UpGamer dengan nominal minimal <strong>Rp 50.000</strong> dalam satu kali transaksi.</li>
                        <li>Setiap transaksi yang memenuhi syarat akan secara otomatis mendapatkan 1 kupon undian (berlaku kelipatan).</li>
                        <li>Semakin banyak transaksi, semakin besar kesempatanmu untuk menang!</li>
                    </ol>
                    <h4 class='content-subtitle'>Daftar Hadiah:</h4>
                    <ul>
                        <li><strong>Hadiah Utama:</strong> 1 unit iPhone 12 Pro Max (256GB) untuk 1 pemenang.</li>
                        <li><strong>Hadiah Kedua:</strong> 3.280 Genesis Crystal untuk 5 pemenang.</li>
                        <li><strong>Hadiah Hiburan:</strong> Blessing of the Welkin Moon untuk 20 pemenang.</li>
                    </ul>
                     <h4 class='content-subtitle'>Syarat & Ketentuan:</h4>
                    <ol>
                        <li>Periode promo berlangsung dari 1 hingga 30 Juli 2025.</li>
                        <li>Pemenang akan diundi dan diumumkan secara live di Instagram @UpGamer pada tanggal 5 Agustus 2025.</li>
                        <li>Pajak hadiah ditanggung oleh pemenang.</li>
                        <li>Keputusan pemenang oleh UpGamer bersifat mutlak dan tidak dapat diganggu gugat.</li>
                    </ol>
                "
            ]
        ];

        // Cek apakah slug yang diminta ada di dalam data kita
        if (!array_key_exists($slug, $allEvents)) {
            abort(404); // Jika tidak ada, tampilkan halaman 404 Not Found
        }

        // Ambil data event yang sesuai dengan slug
        $eventData = $allEvents[$slug];

        return view('event.show', ['event' => $eventData]);
    }
}