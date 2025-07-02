@extends('layouts.app')

@section('title', 'Bantuan - UpGamer')

@section('content')
    <div class="container about-container">
        <h2 class="page-title">Panduan & Bantuan</h2>

        {{-- Panel Kaca untuk Langkah-langkah --}}
        <div class="about-section glass-panel">
            <h3>Langkah-Langkah Pembelian</h3>
            {{-- Kita tetap menggunakan <ol> untuk struktur, animasinya akan diatur oleh CSS --}}
            <ol class="feature-list purchase-steps">
                <li>Kunjungi halaman produk dan pilih item yang Anda inginkan.</li>
                <li>Klik tombol "Beli Sekarang"</strong> untuk menambahkan produk ke keranjang.</li>
                <li>Masuk atau daftar akun jika belum login.</li>
                <li>Periksa kembali pesanan Anda di halaman keranjang.</li>
                <li>Klik <strong>"Lanjutkan Pembayaran"</strong> dan isi detail pengiriman.</li>
                <li>Pilih metode pembayaran yang tersedia dan lakukan transaksi.</li>
                <li>Setelah pembayaran berhasil, Anda akan menerima konfirmasi melalui email.</li>
            </ol>
        </div>

        {{-- Panel Kaca untuk Pertanyaan Umum (FAQ) --}}
        <div class="about-section glass-panel">
            <h3>Pertanyaan Umum</h3>
            {{-- STRUKTUR BARU: Menggunakan <details> dan <summary> untuk Accordion --}}
            <div class="faq-accordion">
                <details class="faq-item">
                    <summary class="faq-question">Apakah saya harus punya akun untuk membeli?</summary>
                    <div class="faq-answer">
                        <p>Tidak, Anda tidak perlu membuat akun dan login untuk menyelesaikan pembelian. Itu hanya optional memastikan semua transaksi Anda tercatat dengan aman dan memudahkan kami untuk membantu jika terjadi kendala.</p>
                    </div>
                </details>
                
                <details class="faq-item">
                    <summary class="faq-question">Metode pembayaran apa yang tersedia?</summary>
                    <div class="faq-answer">
                        <p>Kami menerima berbagai metode pembayaran populer, termasuk transfer bank (BCA, Mandiri, BRI), e-wallet (GoPay, OVO, Dana), dan kartu kredit/debit (Visa, Mastercard).</p>
                    </div>
                </details>
                
                <details class="faq-item">
                    <summary class="faq-question">Apakah produk bisa dikembalikan?</summary>
                    <div class="faq-answer">
                        <p>Karena sifatnya yang digital, produk yang sudah berhasil dikirim dan diterima tidak dapat dikembalikan atau ditukar. Pengembalian dana (refund) hanya akan kami proses jika terjadi kegagalan sistem dari pihak UpGamer yang menyebabkan produk tidak terkirim.</p>
                    </div>
                </details>
            </div>
        </div>
    </div>
@endsection