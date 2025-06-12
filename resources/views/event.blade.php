@extends('layouts.app')

@section('title', 'Event - UpGamer')

@section('content')
    <div class="container about-container">
        <h2 class="about-title">Event & Promo Spesial</h2>
        
        <div class="event-grid">
            <!-- Event 1 -->
            <div class="event-card">
                <div class="event-badge">HOT</div>
                <div class="event-image">
                    <img src="{{ asset('img/event1.jpg') }}" alt="Flash Sale Akhir Bulan">
                </div>
                <div class="event-content">
                    <div class="event-date">1-31 Juli 2025</div>
                    <h3>Flash Sale Akhir Bulan</h3>
                    <p>Diskon hingga 30% untuk semua produk Mobile Legends dan Free Fire</p>
                    <a href="#" class="event-btn">Lihat Detail</a>
                </div>
            </div>
            
            <!-- Event 2 -->
            <div class="event-card">
                <div class="event-badge">NEW</div>
                <div class="event-image">
                    <img src="{{ asset('img/event2.jpg') }}" alt="Turnamen PUBG">
                </div>
                <div class="event-content">
                    <div class="event-date">15 Juli 2025</div>
                    <h3>Turnamen PUBG Mobile</h3>
                    <p>Daftar tim Anda dan menangkan hadiah total Rp 10.000.000</p>
                    <a href="#" class="event-btn">Daftar Sekarang</a>
                </div>
            </div>
            
            <!-- Event 3 -->
            <div class="event-card">
                <div class="event-badge">BEST</div>
                <div class="event-image">
                    <img src="{{ asset('img/event3.jpg') }}" alt="Giveaway Genshin">
                </div>
                <div class="event-content">
                    <div class="event-date">1-30 Juli 2025</div>
                    <h3>Giveaway Genshin Impact</h3>
                    <p>Belanja minimal Rp 50.000 untuk kesempatan menangkan Genesis Crystal</p>
                    <a href="#" class="event-btn">Ikuti Event</a>
                </div>
            </div>
            
            <!-- Event 4 -->
            <div class="event-card">
                <div class="event-image">
                    <img src="{{ asset('img/event4.jpg') }}" alt="Cashback Weekend">
                </div>
                <div class="event-content">
                    <div class="event-date">Setiap Weekend</div>
                    <h3>Cashback Weekend</h3>
                    <p>Dapatkan cashback 10% untuk semua transaksi di hari Sabtu & Minggu</p>
                    <a href="#" class="event-btn">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
        
        <div class="event-archive">
            <h3>Event Terdahulu</h3>
            <ul class="archive-list">
                <li>
                    <span class="archive-date">Juni 2025</span>
                    <span class="archive-title">Summer Sale - Diskon 25% Semua Game</span>
                </li>
                <li>
                    <span class="archive-date">Mei 2025</span>
                    <span class="archive-title">Turnamen Mobile Legends 5v5</span>
                </li>
                <li>
                    <span class="archive-date">April 2025</span>
                    <span class="archive-title">Giveaway Ulang Tahun UpGamer</span>
                </li>
            </ul>
        </div>
    </div>
@endsection