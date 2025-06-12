@extends('layouts.app')

@section('title', 'Invoice ' . $order->transaction_id)

@section('content')
<div class="invoice-page-container container">
    
    <div class="invoice-box glass-panel">
        
        <div class="invoice-header">
            <div class="icon-success">
                <i data-feather="check-circle"></i>
            </div>
            <h1>Pembayaran Berhasil Dibuat</h1>
            <p>Selesaikan pembayaran Anda untuk memproses pesanan.</p>
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
                    <p class="va-number">{{ Str::upper($order->payment_method) }}: 0819-0644-6177</p>
                    <span>a/n Rifky Ardian</span>
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