@extends('layouts.app')

@section('title', 'Invoice ' . $order->transaction_id)

@section('content')
<div class="invoice-page-container container">
    
    <div class="invoice-box glass-panel shine-effect">
        
        <div class="invoice-header">
            <div class="icon-success">
                <i data-feather="check-circle"></i>
            </div>
            <h1>Pembayaran Berhasil Dibuat</h1>
            <p>Selesaikan pembayaran Anda untuk memproses pesanan.</p>
        </div>

        {{-- ▼▼▼ KOTAK PERINGATAN TIMER BARU DITAMBAHKAN DI SINI ▼▼▼ --}}
        <div class="payment-timer-warning glass-panel">
            <h4><i data-feather="clock"></i>Batas Waktu Pembayaran</h4>
            {{-- ID 'payment-timer' akan digunakan oleh JavaScript --}}
            <div id="payment-timer">--:--</div>
            <p>Selesaikan pembayaran sebelum waktu habis atau transaksi akan dianggap batal.</p>
        </div>

        <div class="invoice-details">
            <div class="detail-item">
                <span>ID Transaksi</span>
                <strong class="transaction-id">{{ $order->transaction_id }}</strong>
            </div>
            <div class="detail-item">
                <span>Total Pembayaran</span>
                <strong class="total-price">Rp {{ number_format($order->price, 0, ',', '.') }}</strong>
            </div>
            <div class="detail-item">
                <span>Item</span>
                <strong>{{ $order->game_name }} - {{ $order->item_name }}</strong>
            </div>
            <div class="detail-item">
                <span>Metode Pembayaran</span>
                <strong>{{ Str::upper(str_replace('_', ' ', $order->payment_method)) }}</strong>
            </div>
        </div>

        <div class="payment-instructions">
            <h3>Instruksi Pembayaran</h3>

            @if($order->payment_method === 'qris')
                <p>Pindai QR Code di bawah ini menggunakan aplikasi E-Wallet/Mobile Banking Anda.</p>
                <div class="qr-code-box">
                    <img src="{{ asset('img/payment/sample-qris.png') }}" alt="QRIS Code">
                </div>
                <p class="payment-note">Pastikan nominal transfer sesuai dengan total pembayaran.</p>

            @elseif(in_array($order->payment_method, ['gopay', 'dana']))
                <p>Silakan transfer ke nomor {{ Str::upper($order->payment_method) }} berikut:</p>
                <div class="virtual-account-box">
                    {{-- Ganti dengan nomor Anda yang sebenarnya --}}
                    <p class="va-number">{{ Str::upper($order->payment_method) }}: 0812-3456-7890</p>
                    <span>a/n UPGAMER INDONESIA</span>
                </div>
                <p class="payment-note">Sertakan <strong>ID Transaksi</strong> Anda di catatan transfer.</p>
            @endif
        </div>

        <div class="invoice-footer">
            <p>Item akan dikirimkan dalam 1-5 menit setelah pembayaran Anda kami verifikasi.</p>
            <a href="{{ route('beranda') }}" class="back-to-home-btn">Kembali ke Beranda</a>
        </div>
    </div>

</div>
@endsection

{{-- ▼▼▼ TAMBAHKAN BLOK SCRIPT BARU DI BAWAH INI ▼▼▼ --}}
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Ambil elemen timer dari HTML
    const timerElement = document.getElementById('payment-timer');

    // Pastikan elemennya ada sebelum menjalankan script
    if (timerElement) {
        // 2. Tentukan waktu order dibuat dan waktu kedaluwarsa (30 menit dari sekarang)
        // Kita ambil `created_at` dari objek $order dan ubah ke format yang dimengerti JS
        const createdAt = '{{ $order->created_at->toIso8601String() }}';
        const expirationTime = new Date(createdAt).getTime() + 30 * 60 * 1000; // 30 menit dalam milidetik

        // 3. Buat fungsi yang berjalan setiap detik (1000ms)
        const timerInterval = setInterval(function () {
            const now = new Date().getTime();
            const distance = expirationTime - now;

            // 4. Jika waktu sudah habis
            if (distance < 0) {
                clearInterval(timerInterval); // Hentikan countdown
                timerElement.innerHTML = "WAKTU HABIS";
                timerElement.classList.add('timer-expired'); // Tambahkan class untuk styling (misal: warna merah)
                
                // Sembunyikan instruksi pembayaran agar pengguna tidak bingung
                const instructions = document.querySelector('.payment-instructions');
                if(instructions) instructions.style.display = 'none';
                
                return; // Hentikan eksekusi fungsi
            }

            // 5. Jika waktu masih berjalan, hitung menit dan detik
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // 6. Tampilkan hasilnya di elemen timer dengan format 00:00
            timerElement.innerHTML = String(minutes).padStart(2, '0') + ":" + String(seconds).padStart(2, '0');

        }, 1000);
    }

    // Panggil ulang Feather Icons untuk merender ikon 'clock' yang baru kita tambahkan
    feather.replace();
});
</script>
@endpush