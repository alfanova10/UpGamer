{{-- resources/views/layouts/partials/header.blade.php --}}

<header class="black-header">
    <div class="container">
        <div class="logo">
            <h1><a href="{{ url('/') }}">UpGamer</a></h1>
        </div>
        <nav>
            <ul class="main-menu">
                <li>
                    <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                </li>
                
                {{-- LINK EVENT DIUBAH MENJADI ANCHOR LINK --}}
                <li>
                    <a href="{{ url('/#event') }}">Event</a>
                </li>

                <li>
                    <a href="{{ url('/#tentang-kami') }}">Tentang Kami</a>
                </li>

                <li>
                    <a href="{{ url('/#bantuan') }}">Bantuan</a>
                </li>
            </ul>
        </nav>
        <div class="user-actions">
            <a href="#">Login</a>
        </div>
    </div>
</header>