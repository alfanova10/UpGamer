<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function show(string $game_slug): View
    {
        $gamesData = [
            // ===================================
            // GAME 1: MOBILE LEGENDS
            // ===================================
            'mobile-legends' => [
                'name' => 'Mobile Legends',
                'image' => 'img/ml.jpg',
                'description' => 'Mobile Legends: Bang Bang adalah game MOBA 5v5 yang seru untuk dimainkan bersama teman. Pilih hero favoritmu dan menangkan pertempuran epik melawan tim lawan.',
                'products' => [
                    ['amount' => '5 Diamonds', 'price' => 'Rp 1.000', 'price_value' => 1000, 'badge' => null],
                    ['amount' => '12 Diamonds', 'price' => 'Rp 2.500', 'price_value' => 2500, 'badge' => null],
                    ['amount' => '86 Diamonds', 'price' => 'Rp 12.000', 'price_value' => 12000, 'badge' => 'POPULER'],
                    ['amount' => '170 Diamonds', 'price' => 'Rp 22.000', 'price_value' => 22000, 'badge' => null],
                    ['amount' => '257 Diamonds', 'price' => 'Rp 32.000', 'price_value' => 32000, 'badge' => null],
                    ['amount' => '514 Diamonds', 'price' => 'Rp 62.000', 'price_value' => 62000, 'badge' => 'BEST VALUE'],
                    ['amount' => '1412 Diamonds', 'price' => 'Rp 162.000', 'price_value' => 162000, 'badge' => null],
                    ['amount' => '5532 Diamonds', 'price' => 'Rp 602.000', 'price_value' => 602000, 'badge' => null],
                ]
            ],
            
            // ===================================
            // GAME 2: FREE FIRE
            // ===================================
            'free-fire' => [
                'name' => 'Free Fire',
                'image' => 'img/ff.jpg',
                'description' => 'Free Fire adalah game Battle Royale yang intens di mana 50 pemain bertarung untuk menjadi yang terakhir bertahan. Loot senjata, tetap di zona aman, dan kalahkan semua musuhmu!',
                'products' => [
                    ['amount' => '50 Diamonds', 'price' => 'Rp 7.500', 'price_value' => 7500, 'badge' => null],
                    ['amount' => '70 Diamonds', 'price' => 'Rp 10.000', 'price_value' => 10000, 'badge' => null],
                    ['amount' => '140 Diamonds', 'price' => 'Rp 20.000', 'price_value' => 20000, 'badge' => null],
                    ['amount' => '355 Diamonds', 'price' => 'Rp 50.000', 'price_value' => 50000, 'badge' => 'POPULER'],
                    ['amount' => '720 Diamonds', 'price' => 'Rp 100.000', 'price_value' => 100000, 'badge' => null],
                    ['amount' => '2180 Diamonds', 'price' => 'Rp 300.000', 'price_value' => 300000, 'badge' => 'BEST VALUE'],
                    ['amount' => '7290 Diamonds', 'price' => 'Rp 1.000.000', 'price_value' => 1000000, 'badge' => null],
                ]
            ],

            // ===================================
            // GAME 3: GENSHIN IMPACT (BARU)
            // ===================================
            'genshin-impact' => [
                'name' => 'Genshin Impact',
                'image' => 'img/gi.jpg',
                'description' => 'Genshin Impact adalah Action RPG dunia terbuka yang epik, berlatar di dunia fantasi Teyvat. Jelajahi tujuh elemen, temukan rahasia kuno, dan kumpulkan karakter unik!',
                'products' => [
                    ['amount' => '60 Genesis Crystal', 'price' => 'Rp 16.000', 'price_value' => 16000, 'badge' => null],
                    ['amount' => '300 Genesis Crystal', 'price' => 'Rp 80.000', 'price_value' => 80000, 'badge' => null],
                    ['amount' => '980 Genesis Crystal', 'price' => 'Rp 250.000', 'price_value' => 250000, 'badge' => 'POPULER'],
                    ['amount' => '1980 Genesis Crystal', 'price' => 'Rp 500.000', 'price_value' => 500000, 'badge' => null],
                    ['amount' => '3280 Genesis Crystal', 'price' => 'Rp 800.000', 'price_value' => 800000, 'badge' => null],
                    ['amount' => '6480 Genesis Crystal', 'price' => 'Rp 1.500.000', 'price_value' => 1500000, 'badge' => 'BEST VALUE'],
                    ['amount' => 'Blessing of the Welkin Moon', 'price' => 'Rp 79.000', 'price_value' => 79000, 'badge' => null],
                ]
            ],

            // ===================================
            // GAME 4: ROBLOX (BARU)
            // ===================================
            'roblox' => [
                'name' => 'Roblox',
                'image' => 'img/Roblox.jpg',
                'description' => 'Roblox adalah platform global di mana jutaan orang berkumpul setiap hari untuk berimajinasi, menciptakan, dan bermain bersama di jutaan pengalaman 3D yang imersif.',
                'products' => [
                    ['amount' => '80 Robux', 'price' => 'Rp 15.000', 'price_value' => 15000, 'badge' => null],
                    ['amount' => '160 Robux', 'price' => 'Rp 30.000', 'price_value' => 30000, 'badge' => null],
                    ['amount' => '400 Robux', 'price' => 'Rp 75.000', 'price_value' => 75000, 'badge' => null],
                    ['amount' => '800 Robux', 'price' => 'Rp 150.000', 'price_value' => 150000, 'badge' => 'POPULER'],
                    ['amount' => '1.700 Robux', 'price' => 'Rp 300.000', 'price_value' => 300000, 'badge' => null],
                    ['amount' => '4.500 Robux', 'price' => 'Rp 750.000', 'price_value' => 750000, 'badge' => null],
                    ['amount' => '10.000 Robux', 'price' => 'Rp 1.500.000', 'price_value' => 1500000, 'badge' => 'BEST VALUE'],
                    ['amount' => '22.500 Robux', 'price' => 'Rp 3.000.000', 'price_value' => 3000000, 'badge' => null],
                ]
            ],

            // ===================================
            // GAME 5: PUBG MOBILE (BARU)
            // ===================================
            'pubg-mobile' => [
                'name' => 'PUBG Mobile',
                'image' => 'img/pubg.jpg',
                'description' => 'PUBG Mobile adalah game Battle Royale fenomenal yang menempatkan 100 pemain di pulau terpencil untuk pertarungan hidup mati. Jadilah yang terakhir bertahan!',
                'products' => [
                    ['amount' => '60 UC', 'price' => 'Rp 15.000', 'price_value' => 15000, 'badge' => null],
                    ['amount' => '120 UC', 'price' => 'Rp 30.000', 'price_value' => 30000, 'badge' => null],
                    ['amount' => '250 UC', 'price' => 'Rp 60.000', 'price_value' => 60000, 'badge' => null],
                    ['amount' => '660 UC', 'price' => 'Rp 150.000', 'price_value' => 150000, 'badge' => 'POPULER'],
                    ['amount' => '1.800 UC', 'price' => 'Rp 400.000', 'price_value' => 400000, 'badge' => null],
                    ['amount' => '3.850 UC', 'price' => 'Rp 800.000', 'price_value' => 800000, 'badge' => null],
                    ['amount' => '8.100 UC', 'price' => 'Rp 1.500.000', 'price_value' => 1500000, 'badge' => 'BEST VALUE'],
                    ['amount' => '16.200 UC', 'price' => 'Rp 3.000.000', 'price_value' => 3000000, 'badge' => null],
                ]
            ],
            
            // ===================================
            // GAME 6: WUTHERING WAVES (BARU)
            // ===================================
            'wuthering-waves' => [
                'name' => 'Wuthering Waves',
                'image' => 'img/wuwa.jpg',
                'description' => 'Wuthering Waves adalah Action RPG dunia terbuka yang berlatar di dunia pasca-apokaliptik. Jelajahi dunia yang luas, lawan musuh kuat, dan ungkap misteri.',
                'products' => [
                    ['amount' => '60 Lunite', 'price' => 'Rp 16.000', 'price_value' => 16000, 'badge' => null],
                    ['amount' => '300 Lunite', 'price' => 'Rp 80.000', 'price_value' => 80000, 'badge' => null],
                    ['amount' => '980 Lunite', 'price' => 'Rp 250.000', 'price_value' => 250000, 'badge' => 'POPULER'],
                    ['amount' => '1980 Lunite', 'price' => 'Rp 500.000', 'price_value' => 500000, 'badge' => null],
                    ['amount' => '3280 Lunite', 'price' => 'Rp 800.000', 'price_value' => 800000, 'badge' => null],
                    ['amount' => '6480 Lunite', 'price' => 'Rp 1.500.000', 'price_value' => 1500000, 'badge' => 'BEST VALUE'],
                ]
            ],
        ];

        // Kode di bawah ini tidak perlu diubah, akan bekerja untuk semua game
        if (!array_key_exists($game_slug, $gamesData)) {
            abort(404);
        }

        $game = $gamesData[$game_slug];

        return view('products.show', [
            'game' => $game
        ]);
    }
}