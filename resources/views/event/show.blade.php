{{-- resources/views/event/show.blade.php --}}

@extends('layouts.app')

@section('title', $event['title'] . ' - UpGamer')

@section('content')
<div class="container about-container">
    <div class="event-detail-card glass-panel">
        
        {{-- BAGIAN GAMBAR HEADER --}}
        <div class="event-detail-header">
            <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}">
            <div class="event-detail-overlay">
                <h1>{{ $event['title'] }}</h1>
            </div>
        </div>

        {{-- BAGIAN INFO & KONTEN --}}
        <div class="event-detail-body">
            
            {{-- Info Singkat: Periode & Tags --}}
            <div class="event-meta">
                <div class="meta-item">
                    <i data-feather="calendar"></i>
                    <span>{{ $event['period'] }}</span>
                </div>
                <div class="meta-item">
                    <i data-feather="tag"></i>
                    @foreach($event['tags'] as $tag)
                        <span class="tag">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Konten Utama dari Controller --}}
            <div class="event-content-main">
                {{-- Tanda {!! !!} digunakan agar tag HTML (seperti <p>, <ul>) bisa dirender --}}
                {!! $event['content'] !!}
            </div>

            {{-- Tombol Aksi --}}
            <div class="event-actions">
                <a href="{{ route('product.show', ['game_slug' => 'mobile-legends']) }}" class="event-btn action-btn">Ikuti Promo Sekarang</a>
                <a href="{{ url()->previous() }}" class="back-link">Kembali</a>
            </div>

        </div>
    </div>
</div>
@endsection