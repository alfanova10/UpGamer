<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UpGamer - Top Up Game Murah & Cepat')</title>
    {{-- Menggunakan helper asset() untuk path yang benar --}}
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script> {{-- Untuk ikon-ikon cantik --}}
</head>
<body>
      {{-- ▼▼▼ TAMBAHKAN BLOK INI ▼▼▼ --}}
    <div class="geometric-shape shape-1"></div>
    <div class="geometric-shape shape-2"></div>
    <div class="geometric-shape shape-3"></div>
    {{-- ▲▲▲ AKHIR DARI BLOK BARU ▲▲▲ --}}
    
    {{-- Memanggil partials/header.blade.php --}}
    @include('partials.header')

    <main>
        {{-- Di sini konten spesifik setiap halaman akan ditampilkan --}}
        @yield('content')
    </main>

    {{-- Memanggil partials/footer.blade.php --}}
    @include('partials.footer')
    
    <script>
    feather.replace();
    </script>

</body>
</html>