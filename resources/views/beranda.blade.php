@extends('layouts.app')

@section('title', 'Beranda - UpGamer')

@section('content')
    {{-- BAGIAN 1: HERO SECTION --}}
    <section class="hero">
        <div class="container"> <div id="beranda">
            <h2>Top Up Game Disini</h2>
            <p>Isi diamond, UC, dan mata uang game lainnya dengan harga terbaik dan proses instan, hanya di UpGamer kita pastikan itu bersama dan terpercaya</p>
        </div>
    </section>

    {{-- BAGIAN 2: GRID GAME --}}
    <div class="game-showcase-container">
        <div class="product-grid">
            <!-- Game 1: Mobile Legends -->
            <div class="product-item">
                {{-- ▼▼▼ UBAH BAGIAN href INI ▼▼▼ --}}
                <a href="{{ route('product.show', ['game_slug' => 'mobile-legends']) }}" class="product-card">
                    <img src="{{ asset('img/ml.jpg') }}" class="product-card-img" alt="Mobile Legends">
                    <div class="product-overlay">
                        <span>Cek Sekarang</span>
                    </div>
                    <div class="product-title-panel">
                        <h3>Mobile Legends</h3>
                    </div>
                </a>
            </div>
            <!-- Game 2: Free Fire -->
            <div class="product-item">
                {{-- ▼▼▼ UBAH BAGIAN href INI ▼▼▼ --}}
                <a href="{{ route('product.show', ['game_slug' => 'free-fire']) }}" class="product-card">
                    <img src="{{ asset('img/ff.jpg') }}" class="product-card-img" alt="Free Fire">
                    <div class="product-overlay">
                        <span>Cek Sekarang</span>
                    </div>
                    <div class="product-title-panel">
                        <h3>Free Fire</h3>
                    </div>
                </a>
            </div>
            <!-- Game 3: PUBG Mobile -->
            <div class="product-item">
                {{-- ▼▼▼ UBAH BAGIAN href INI (sesuaikan slug jika perlu) ▼▼▼ --}}
                <a href="{{ route('product.show', ['game_slug' => 'pubg-mobile']) }}" class="product-card">
                    <img src="{{ asset('img/pubg.jpg') }}" class="product-card-img" alt="PUBG Mobile">
                    <div class="product-overlay">
                        <span>Cek Sekarang</span>
                    </div>
                    <div class="product-title-panel">
                        <h3>PUBG Mobile</h3>
                    </div>
                </a>
            </div>
            <!-- Game 4: Genshin Impact -->
            <div class="product-item">
                {{-- ▼▼▼ UBAH BAGIAN href INI (sesuaikan slug jika perlu) ▼▼▼ --}}
                <a href="{{ route('product.show', ['game_slug' => 'genshin-impact']) }}" class="product-card">
                    <img src="{{ asset('img/gi.jpg') }}" class="product-card-img" alt="Genshin Impact">
                    <div class="product-overlay">
                        <span>Cek Sekarang</span>
                    </div>
                    <div class="product-title-panel">
                        <h3>Genshin Impact</h3>
                    </div>
                </a>
            </div>
            <!-- Game 5: Roblox -->
            <div class="product-item">
                {{-- ▼▼▼ UBAH BAGIAN href INI (sesuaikan slug jika perlu) ▼▼▼ --}}
                <a href="{{ route('product.show', ['game_slug' => 'roblox']) }}" class="product-card">
                    <img src="{{ asset('img/Roblox.jpg') }}" class="product-card-img" alt="Roblox">
                    <div class="product-overlay">
                        <span>Cek Sekarang</span>
                    </div>
                    <div class="product-title-panel">
                        <h3>Roblox</h3>
                    </div>
                </a>
            </div>
            <!-- Game 6: Wuthering Waves -->
            <div class="product-item">
                {{-- ▼▼▼ UBAH BAGIAN href INI (sesuaikan slug jika perlu) ▼▼▼ --}}
                <a href="{{ route('product.show', ['game_slug' => 'wuthering-waves']) }}" class="product-card">
                    <img src="{{ asset('img/wuwa.jpg') }}" class="product-card-img" alt="Wuthering Waves">
                    <div class="product-overlay">
                        <span>Cek Sekarang</span>
                    </div>
                    <div class="product-title-panel">
                        <h3>Wuthering Waves</h3>
                    </div>
                </a>
            </div>

           <!-- Game 7: Valorant -->
            <div class="product-item">
                {{-- Pastikan slug 'valorant' ada di database Anda --}}
                <a href="{{ route('product.show', ['game_slug' => 'valorant']) }}" class="product-card">
                    {{-- Pastikan gambar valorant.jpg ada di folder public/img --}}
                    <img src="{{ asset('img/valorant.jpg') }}" class="product-card-img" alt="Valorant">
                    <div class="product-overlay">
                        <span>Cek Sekarang</span>
                    </div>
                    <div class="product-title-panel">
                        <h3>Valorant</h3>
                    </div>
                </a>
            </div>
            <!-- Game 8: Clash of Clans -->
            <div class="product-item">
                {{-- Pastikan slug 'clash-of-clans' ada di database Anda --}}
                <a href="{{ route('product.show', ['game_slug' => 'clash-of-clans']) }}" class="product-card">
                    {{-- Pastikan gambar coc.jpg ada di folder public/img --}}
                    <img src="{{ asset('img/coc.jpg') }}" class="product-card-img" alt="Clash of Clans">
                    <div class="product-overlay">
                        <span>Cek Sekarang</span>
                    </div>
                    <div class="product-title-panel">
                        <h3>Clash of Clans</h3>
                    </div>
                </a>
            </div>
            <!-- Game 9: Magic Chess -->
            <div class="product-item">
                {{-- Pastikan slug 'magic-chess' ada di database Anda --}}
                <a href="{{ route('product.show', ['game_slug' => 'magic-chess']) }}" class="product-card">
                    {{-- Pastikan gambar magic-chess.jpg ada di folder public/img --}}
                    <img src="{{ asset('img/magic-chess.jpg') }}" class="product-card-img" alt="Magic Chess">
                    <div class="product-overlay">
                        <span>Cek Sekarang</span>
                    </div>
                    <div class="product-title-panel">
                        <h3>Magic Chess</h3>
                    </div>
                </a>
            </div>

        </div>
    </div>
        </div>
    </div>

    {{-- ====================================================== --}}
    {{-- KONTEN TAMBAHAN DIMULAI DARI SINI --}}
    {{-- ====================================================== --}}

    {{-- BAGIAN 3: EVENT & PROMO --}}
    <div class="container about-container">
    <h2 id="event" class="page-title">Event & Promo Spesial</h2>

    {{-- ▼▼▼ INI BAGIAN BARU UNTUK MEMBUNGKUS SCROLL ▼▼▼ --}}
    <div class="event-scroll-wrapper">
        <div class="event-grid" id="eventGridContainer">

            <!-- Event 1 -->
            <div class="event-card glass-panel">
                <div class="event-badge">HOT</div>
                <div class="event-image">
                    <img src="{{ asset('img/event1.jpg') }}" alt="Flash Sale Akhir Bulan">
                </div>
                <div class="event-content">
                    <div class="event-date">1-31 Juli 2025</div>
                    <h3>Flash Sale Akhir Bulan</h3>
                    <p>Diskon hingga 30% untuk semua produk Mobile Legends dan Free Fire</p>
                    <a href="{{ route('event.show', ['slug' => 'weekly-warriors-sale']) }}" class="event-btn">Sikat Sekarang</a>
                </div>
            </div>
            <!-- Event 2 -->
            <div class="event-card glass-panel">
                <div class="event-badge">NEW</div>
                <div class="event-image">
                    <img src="{{ asset('img/event2.jpg') }}" alt="Turnamen PUBG">
                </div>
                <div class="event-content">
                    <div class="event-date">15 Juli 2025</div>
                    <h3>Turnamen PUBG Mobile</h3>
                    <p>Daftar tim Anda dan menangkan hadiah total Rp 10.000.000</p>
                    <a href="{{ route('event.show', ['slug' => 'turnamen-pubg-mobile']) }}" class="event-btn">Daftar Sekarang</a>
                </div>
            </div>
            <!-- Event 3 -->
            <div class="event-card glass-panel">
                <div class="event-badge">BEST</div>
                <div class="event-image">
                    <img src="{{ asset('img/event3.jpg') }}" alt="Giveaway Genshin">
                </div>
                <div class="event-content">
                    <div class="event-date">1-30 Juli 2025</div>
                    <h3>Giveaway Genshin Impact</h3>
                    <p>Belanja minimal Rp 50.000 untuk kesempatan menangkan Genesis Crystal</p>
                     <a href="{{ route('event.show', ['slug' => 'gebyar-juli-giveaway']) }}" class="event-btn">Ikuti Event</a>
                </div>
            </div>
            {{-- Tambahkan event card lain di sini jika ada --}}

        </div>
        {{-- ▼▼▼ Tombol Navigasi Scroll ▼▼▼ --}}
        <button id="scrollLeftBtn" class="scroll-btn left" aria-label="Scroll Left">‹</button>
        <button id="scrollRightBtn" class="scroll-btn right" aria-label="Scroll Right">›</button>
    </div>
        <div class="event-archive glass-panel">
            <h3>Event Terdahulu</h3>
            <ul class="archive-list">
                <li><span class="archive-date">Juni 2025</span><span class="archive-title">Summer Sale - Diskon 25%</span></li>
                <li><span class="archive-date">Mei 2025</span><span class="archive-title">Turnamen Mobile Legends 5v5</span></li>
            </ul>
        </div>
    </div>

    {{-- ====================================================== --}}
{{-- BAGIAN BARU: ULASAN PENGGUNA --}}
{{-- ====================================================== --}}
<div class="container about-container">
    <h2 class="page-title">Apa Kata Mereka?</h2>

    @if (session('success'))
        <div class="alert-success glass-panel">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="reviews-section">
        {{-- BAGIAN DAFTAR ULASAN --}}
        <div class="reviews-grid">
            @forelse ($reviews as $review)
                <div class="review-card glass-panel">
                    <div class="review-header">
                        <div class="review-author">{{ $review->name }}</div>
                       <div class="review-rating">
    {{-- Kita buat 5 bintang sebagai "background" --}}
                            <div class="stars-background">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                            {{-- Lalu kita timpa dengan bintang berwarna sesuai nilai rating --}}
                            <div class="stars-filled" style="width: {{ $review->rating * 20 }}%;">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                    </div>
                    <p class="review-comment">“{{ $review->comment }}”</p>
                </div>
            @empty
                <p>Belum ada ulasan. Jadilah yang pertama memberikan ulasan!</p>
            @endforelse
        </div>

        {{-- BAGIAN FORM UNTUK MENGISI ULASAN --}}
        <div class="review-form-wrapper glass-panel">
            <h3>Bagikan Pengalamanmu!</h3>
            <p>Ulasan Anda sangat berarti untuk membantu kami menjadi lebih baik.</p>
            
            {{-- Form akan mengirim data ke route 'review.store' yang akan kita buat --}}
            <form action="{{ route('review.store') }}" method="POST" class="review-form">
                @csrf
                <div class="form-group">
                    <label for="name">Nama/Nickname</label>
                    <input type="text" id="name" name="name" placeholder="Contoh: GamerPro123" required>
                </div>
                
                <div class="form-group">
                    <label>Rating</label>
                    <div class="rating-input">
                        {{-- Bintang rating dibuat dari radio button --}}
                        <input type="radio" id="star5" name="rating" value="5" required><label for="star5" title="Luar Biasa"></label>
                        <input type="radio" id="star4" name="rating" value="4"><label for="star4" title="Bagus"></label>
                        <input type="radio" id="star3" name="rating" value="3"><label for="star3" title="Cukup"></label>
                        <input type="radio" id="star2" name="rating" value="2"><label for="star2" title="Kurang"></label>
                        <input type="radio" id="star1" name="rating" value="1"><label for="star1" title="Buruk"></label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="comment">Komentar</label>
                    <textarea id="comment" name="comment" rows="4" placeholder="Ceritakan pengalaman belanjamu di sini..." required></textarea>
                </div>
                
                <button type="submit" class="event-btn">Kirim Ulasan</button>
            </form>
        </div>
    </div>
</div>

    {{-- BAGIAN 4: TENTANG KAMI --}}
    <div class="container about-container">
        <h2 id="tentang-kami" class="page-title">Tentang UpGamer</h2>
        <div class="about-section glass-panel">
            <h3>Visi Kami</h3>
            <p>UpGamer hadir sebagai solusi top up game terpercaya dengan komitmen memberikan pengalaman transaksi yang aman, mudah, dan menguntungkan bagi para gamer.</p>
        </div>
        <div class="about-section glass-panel">
            <h3>Tim Pengembang</h3>
            <p>Dikembangkan oleh mahasiswa Universitas Indraprasta PGRI sebagai proyek mata kuliah Pemrograman Web.</p>
            <ul class="team-list">
                <li><strong>Rifqi Naya</strong> - Frontend Dev</li>
                <li><strong>Pradika</strong>  - Frontend Dev</li>
                <li><strong>Fajar</strong> - Backend Dev</li>
                <li><strong>Rizki Azhar</strong> - UI/UX Designer</li>
                <li><strong>Rifky Ardian</strong> - FullStack Dev & UI/UX Designer</li>
            </ul>
        </div>
    </div>

    {{-- BAGIAN 5: BANTUAN --}}
    <div class="container about-container">
        <h2 id="bantuan" class="page-title">Panduan & Bantuan</h2>
        <div class="about-section glass-panel">
            <h3><strong>Langkah-Langkah Pembelian</strong></h3> 
            <ol class="feature-list purchase-steps"> 
                <li>Kunjungi halaman produk dan pilih item yang Anda inginkan.</li>
                <li>Klik tombol "Beli Sekarang" untuk menambahkan produk ke keranjang.</li>
                <li>(optional) Masuk atau daftar akun jika belum login.</li>
                <li>Periksa kembali pesanan Anda di halaman keranjang.</li>
                <li>Klik "Lanjutkan Pembayaran"dan isi detail pengiriman.</li>
                <li>Pilih metode pembayaran yang tersedia dan lakukan transaksi.</li>
                <li>Setelah pembayaran berhasil, Anda akan menerima konfirmasi melalui email.</li>
            </ol>
        </div>
        <div class="about-section glass-panel">
            <h3>Pertanyaan Umum</h3>
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

{{-- ▼▼▼ TAMBAHKAN SECTION BARU INI DI BAWAH @endsection ▼▼▼ --}}
@push('scripts')
<script>
    // Pastikan script berjalan setelah semua halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {

        // Ambil elemen-elemen yang kita butuhkan
        const scrollContainer = document.getElementById('eventGridContainer');
        const scrollLeftBtn = document.getElementById('scrollLeftBtn');
        const scrollRightBtn = document.getElementById('scrollRightBtn');

        // Pastikan semua elemennya ada sebelum menjalankan script
        if (scrollContainer && scrollLeftBtn && scrollRightBtn) {
            
            // Tentukan seberapa jauh scroll akan bergerak setiap kali tombol diklik
            // Kita ambil lebar card pertama + gap
            const card = scrollContainer.querySelector('.event-card');
            const scrollAmount = card ? card.offsetWidth + 32 : 400; // 32 adalah gap 2rem

            // Fungsi untuk scroll ke kanan
            scrollRightBtn.addEventListener('click', function() {
                scrollContainer.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            });

            // Fungsi untuk scroll ke kiri
            scrollLeftBtn.addEventListener('click', function() {
                scrollContainer.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            });
        }
    });
</script>
@endpush