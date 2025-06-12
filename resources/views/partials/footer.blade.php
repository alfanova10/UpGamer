{{-- resources/views/partials/footer.blade.php --}}
<footer class="site-footer">
    <div class="container">
        <div class="footer-main">
            <div class="footer-grid">
                
                {{-- KOLOM 1: SALAM HANGAT & TERIMAKASIH --}}
                <div class="footer-column">
                    <h4>Terima Kasih dari UpGamer</h4>
                    <p>
                        Salam hangat untuk semua Gamers! Terima kasih telah mengunjungi UpGamer. 
                        Website ini kami bangun dengan semangat sebagai bagian dari proyek mata kuliah Pemrograman Web.
                        Kami berharap platform ini menjadi tempat yang nyaman dan tepercaya untuk semua kebutuhan top-up Anda.
                    </p>
                </div>

                {{-- KOLOM 2: ALAMAT KAMPUS --}}
                <div class="footer-column">
                    <h4>Alamat Kampus</h4>
                    <p>
                        <strong>Universitas Indraprasta PGRI</strong>
                    </p>
                    <ul class="footer-links">
                        <li><strong>Gedung A:</strong><br>Jl. Nangka No. 58 C, Tanjung Barat, Jagakarsa, Jakarta Selatan.</li>
                        <li style="margin-top:10px;"><strong>Gedung B:</strong><br>Jl. Raya Tengah, Kel. Gedong, Pasar Rebo, Jakarta Timur.</li>
                    </ul>
                </div>

                {{-- KOLOM 3: BANTUAN & KONTAK --}}
                <div class="footer-column">
                    <h4>Bantuan & Kontak</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('bantuan') }}"><i data-feather="help-circle"></i><span>Panduan & Bantuan</span></a></li>
                        <li><a href="https://www.instagram.com/rifky.docx" target="_blank"><i data-feather="instagram"></i><span>Instagram Pengembang</span></a></li>
                        <li><a href="https://wa.me/6281906446177" target="_blank"><i data-feather="message-circle"></i><span>WhatsApp</span></a></li>
                    </ul>
                </div>
                
                {{-- KOLOM 4: IKUTI KAMI --}}
                <div class="footer-column">
                    <h4>Ikuti Media Sosial</h4>
                     <ul class="footer-links">
                        <li><a href="#"><i data-feather="facebook"></i><span>Facebook</span></a></li>
                        <li><a href="#"><i data-feather="instagram"></i><span>Instagram</span></a></li>
                        <li><a href="#"><i data-feather="youtube"></i><span>YouTube</span></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="footer-legal">
            <p>© {{ date('Y') }} UpGamer. Proyek Pemrograman Web Universitas Indraprasta PGRI.</p>
        </div>
    </div>
</footer>