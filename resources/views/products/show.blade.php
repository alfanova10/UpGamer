@extends('layouts.app')

@section('title', $game['name'] . ' Top Up - UpGamer')

@section('content')
<main>
    <div class="container game-container">

        {{-- BAGIAN 1: HEADER GAME --}}
        <div class="game-header glass-panel">
            <div class="game-cover">
                <img src="{{ asset($game['image']) }}" alt="{{ $game['name'] }} Cover">
            </div>
            <div class="game-info">
                <h1>{{ $game['name'] }}</h1>
                <div class="game-rating">
                    <span class="stars">★★★★★</span>
                    <span class="rating-text">4.9/5 (10.000+ reviews)</span>
                </div>
                <p class="game-description">{{ $game['description'] }}</p>
            </div>
        </div>

        {{-- BAGIAN 2: DAFTAR HARGA --}}
        <div class="price-section glass-panel">
            <h2 class="section-title">Pilih Nominal</h2>
            <div class="price-grid">
                @foreach($game['products'] as $product)
                    <div class="price-item">
                        @if($product['badge'] == 'POPULER')
                            <div class="popular-badge">POPULER</div>
                        @elseif($product['badge'] == 'BEST VALUE')
                             <div class="best-badge">BEST VALUE</div>
                        @endif
                        <div class="diamond-amount">{{ $product['amount'] }}</div>
                        <div class="price">{{ $product['price'] }}</div>

                        {{-- Form sekarang mengirim ke 'order.create' --}}
                        <form action="{{ route('order.create') }}" method="POST" style="margin-top: auto;">
                            @csrf
                            <input type="hidden" name="game_name" value="{{ $game['name'] }}">
                            <input type="hidden" name="item_name" value="{{ $product['amount'] }}">
                            <input type="hidden" name="price" value="{{ $product['price_value'] }}">
                            <input type="hidden" name="game_image" value="{{ $game['image'] }}">
                            <button type="submit" class="buy-btn">Beli Sekarang</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- BAGIAN 3: DETAIL & PERINGATAN --}}
        <div class="game-details">
            <div class="warning-section glass-panel">
                <h3 class="warning-title">⚠ PERINGATAN PENIPUAN</h3>
                <div class="warning-content">
                    <p>1. Hanya gunakan layanan resmi UpGamer untuk top up {{ $game['name'] }}.</p>
                    <p>2. Jangan pernah memberikan ID dan password Anda kepada siapapun.</p>
                    <p>3. Hati-hati dengan penawaran harga diamond yang terlalu murah.</p>
                    <p>4. Selalu periksa ulang detail pembayaran sebelum melakukan transaksi.</p>
                    <p>5. Laporkan segera ke customer service kami jika menemukan kecurigaan penipuan.</p>
                </div>
                <a href="{{ route('bantuan') }}" class="help-link">Baca Panduan Keamanan di Halaman Bantuan →</a>
            </div>

            <div class="about-game glass-panel">
                <h3>Tentang {{ $game['name'] }}</h3>
                <p>Setiap game memiliki deskripsi dan cara top-up yang unik. Anda bisa menambahkan data ini ke controller Anda nanti agar lebih dinamis.</p>
                <h4>Cara Top Up:</h4>
                <ol>
                    <li>Pilih nominal yang ingin dibeli.</li>
                    <li>Masukkan ID Game Anda (nanti akan ada form untuk ini).</li>
                    <li>Pilih metode pembayaran.</li>
                    <li>Selesaikan pembayaran.</li>
                    <li>Item akan langsung masuk ke akun Anda dalam 1-5 menit.</li>
                </ol>
            </div>
        </div>
    </div>
</main>
@endsection