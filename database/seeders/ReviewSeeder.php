<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review; // Jangan lupa import model

class ReviewSeeder extends Seeder
{
    public function run()
    {
        Review::create([
            'name' => 'GamerPro123',
            'comment' => 'Prosesnya cepet banget! Top up ML langsung masuk gak sampe 1 menit. Harganya juga bersaing. Pasti langganan di sini!',
            'rating' => 5,
        ]);

        Review::create([
            'name' => 'Siska_FF',
            'comment' => 'Awalnya ragu, tapi ternyata amanah. CS-nya juga ramah pas aku tanya-tanya. Thank you UpGamer!',
            'rating' => 5,
        ]);

        Review::create([
            'name' => 'TravelerTeyvat',
            'comment' => 'Beli Genesis Crystal di sini lebih murah dari tempat lain. Pembayarannya juga gampang, banyak pilihan. Recommended!',
            'rating' => 4,
        ]);
    }
}