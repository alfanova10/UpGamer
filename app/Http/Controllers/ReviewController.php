<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi input dari form
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:500',
        ]);

        // 2. Simpan data ke database
        Review::create([
            'name' => $validated['name'],
            'rating' => $validated['rating'],
            'comment' => $validated['comment'],
            'is_visible' => true, // Default, langsung ditampilkan
        ]);

        // 3. Kembalikan ke halaman beranda dengan pesan sukses
        return redirect()->route('beranda')
                         ->with('success', 'Terima kasih! Ulasan Anda berhasil dikirim.');
    }
}