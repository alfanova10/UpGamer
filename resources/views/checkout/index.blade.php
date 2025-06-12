{{-- resources/views/checkout/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Konfirmasi Pesanan - UpGamer')

@section('content')
<div class="checkout-container container">
    <h1 class="page-title">Konfirmasi Pesanan</h1>

    {{-- ▼▼▼ INI BLOK BARU UNTUK MENAMPILKAN ERROR ▼▼▼ --}}
    {{-- Jika validasi gagal, Laravel akan mengirim variabel $errors. Kita akan menampilkannya. --}}
    @if ($errors->any())
        <div class="alert alert-danger glass-panel" style="padding: 20px; margin-bottom: 20px; background-color: rgba(239, 68, 68, 0.2); border-color: rgba(239, 68, 68, 0.5);">
            <h4 style="color: #f87171; margin-bottom: 10px;">Oops! Periksa kembali isian Anda:</h4>
            <ul style="color: #fca5a5; list-style-position: inside;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- ▲▲▲ AKHIR DARI BLOK ERROR ▲▲▲ --}}


    <div class="checkout-grid">
        
        {{-- KOLOM KIRI: RINGKASAN PESANAN --}}
        <div class="order-summary glass-panel">
            <h3>Ringkasan Belanja</h3>
            <div class="order-item">
                <img src="{{ asset($game_image) }}" alt="{{ $game_name }}" class="item-image">
                <div class="item-details">
                    <p class="item-game-name">{{ $game_name }}</p>
                    <h4 class="item-product-name">{{ $item_name }}</h4>
                </div>
                <p class="item-price">Rp {{ number_format($price, 0, ',', '.') }}</p>
            </div>
            <div class="order-total">
                <span>Total Pembayaran</span>
                <span class="total-price">Rp {{ number_format($price, 0, ',', '.') }}</span>
            </div>
        </div>

        {{-- KOLOM KANAN: FORM DATA & PEMBAYARAN --}}
        <div class="payment-form glass-panel">
            <h3>1. Lengkapi Data</h3>
            
            <form action="{{ route('order.store') }}" method="POST">
                @csrf
                <input type="hidden" name="game_name" value="{{ $game_name }}">
                <input type="hidden" name="item_name" value="{{ $item_name }}">
                <input type="hidden" name="price" value="{{ $price }}">

                <div class="form-group">
                    <label for="user_id">User ID Game</label>
                    {{-- `old('user_id')` akan menjaga data yang sudah diisi tidak hilang --}}
                    <input type="text" id="user_id" name="user_id" placeholder="Masukkan User ID (Zone ID)" value="{{ old('user_id') }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" name="email" placeholder="Untuk bukti pembayaran" value="{{ old('email') }}" required>
                </div>

                <h3 class="payment-title">2. Pilih Metode Pembayaran</h3>
                <div class="payment-methods">
                    {{-- Logika untuk menjaga pilihan metode pembayaran tetap terpilih setelah error --}}
                    <label class="payment-option">
                        <input type="radio" name="payment_method" value="qris" {{ old('payment_method', 'qris') == 'qris' ? 'checked' : '' }}>
                        <div class="payment-method-tile">
                            <img src="{{ asset('img/payment/qris.svg') }}" alt="QRIS">
                            <span>QRIS</span>
                        </div>
                    </label>
                    <label class="payment-option">
                        <input type="radio" name="payment_method" value="gopay" {{ old('payment_method') == 'gopay' ? 'checked' : '' }}>
                        <div class="payment-method-tile">
                            <img src="{{ asset('img/payment/gopay.svg') }}" alt="GoPay">
                            <span>GoPay</span>
                        </div>
                    </label>
                    <label class="payment-option">
                        <input type="radio" name="payment_method" value="dana" {{ old('payment_method') == 'dana' ? 'checked' : '' }}>
                        <div class="payment-method-tile">
                            <img src="{{ asset('img/payment/dana.svg') }}" alt="Dana">
                            <span>Dana</span>
                        </div>
                    </label>
                </div>
                
                <button type="submit" class="checkout-button">
                    Bayar Sekarang
                </button>
            </form>
        </div>
    </div>
</div>
@endsection