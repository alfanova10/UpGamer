@extends('layouts.app')

@section('title', 'Tentang Kami - UpGamer')

@section('content')
    <div class="container about-container">
        {{-- MENGGUNAKAN KELAS BARU --}}
        <h2 class="page-title">Tentang UpGamer</h2>
        
        {{-- MENAMBAHKAN KELAS .glass-panel --}}
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
        
        <div class="about-section glass-panel">
            <h3>Kontak Kami</h3>
            <div class="contact-grid">
                <div>
                    <h4>Alamat Kampus A</h4>
                    <p>Universitas Indraprasta PGRI<br>
                    Jl. Nangka No.58C, Tanjung barat, Jakarta Selatan</p>
                </div>
                <div>
                    <h4>Alamat Kampus B</h4>
                    <p>Universitas Indraprasta PGRI<br>
                    Jl. Nangka No.58C, Gedong, Pasar Rebo Jakarta Timur</p>
                </div>
                <div>
                    <h4>Sosial Media & Kontak</h4>
                    <p>Instagram: <a href="https://www.instagram.com/rifky.docx" target="_blank">@rifky.docx</a></p>
                    <p>WhatsApp: <a href="https://wa.me/6281906446177" target="_blank">+62819-0644-6177</a></p>
                </div>
            </div>
        </div>
        
        <div class="about-section glass-panel">
            <h3>Keunggulan Kami</h3>
            <ol class="feature-list">
                <li>Proses top up instan kurang dari 3 menit</li>
                <li>Harga kompetitif dengan promo harian</li>
                <li>Support game populer</li>
                <li>Pembayaran aman dengan berbagai metode</li>
                <li>Customer service responsif 24/7</li>
            </ol>
        </div>
    </div>
@endsection