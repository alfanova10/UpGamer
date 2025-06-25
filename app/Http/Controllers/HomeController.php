<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review; // <-- IMPORT MODEL REVIEW

class HomeController extends Controller
{
    public function index()
    {
        // Ambil ulasan terbaru
        $reviews = Review::where('is_visible', true)
                         ->latest() // Urutan dari yang terbaru
                         ->take(4)  // 
                         ->get();

        // Kirim data reviews ke view
        return view('beranda', ['reviews' => $reviews]); 
    }
}