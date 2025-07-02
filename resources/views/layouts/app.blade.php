<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UpGamer - Top Up Game Murah & Cepat')</title>
    
    @vite('resources/css/app.css')
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    {{-- Memuat library Feather Icons --}}
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    {{-- Hiasan Geometris --}}
    <div class="geometric-shape shape-1"></div>
    <div class="geometric-shape shape-2"></div>
    <div class="geometric-shape shape-3"></div>
    
    {{-- Header --}}
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')
    
    {{-- ========================================================= --}}
    {{-- ▼▼▼ GANTI BAGIAN SCRIPT LAMA ANDA DENGAN BLOK INI ▼▼▼ --}}
    {{-- ========================================================= --}}
    
    <script>
        // Jalankan Feather Icons untuk pertama kali, untuk ikon-ikon yang ada di layout
        feather.replace();
    </script>

    {{-- 
        Ini adalah 'kotak surat' atau 'wadah' script. 
        Semua kode dari @push('scripts') di halaman lain (seperti halaman invoice)
        akan dimasukkan secara otomatis di sini.
    --}}
    @stack('scripts')
    
    {{-- ========================================================= --}}
    {{-- ▲▲▲ AKHIR DARI BLOK YANG DIUBAH ▲▲▲                   --}}
    {{-- ========================================================= --}}

</body>
</html>