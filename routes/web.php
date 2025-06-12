<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Import Semua Controller
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;

/*
|--------------------------------------------------------------------------
| Web Routes (REVISI FINAL)
|--------------------------------------------------------------------------
*/

// --- Rute Halaman Utama & Statis (Metode GET) ---
Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/tentang', [AboutController::class, 'index'])->name('tentang');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/bantuan', [HelpController::class, 'index'])->name('bantuan');


// --- Alur Pemesanan (Transaction Flow) ---

// Langkah 1: Pengguna melihat halaman detail produk.
Route::get('/produk/{game_slug}', [ProductController::class, 'show'])->name('product.show');

// Langkah 2: Form produk dikirim (POST) ke OrderController untuk membuat pesanan SEMENTARA di session.
Route::post('/order/create', [OrderController::class, 'create'])->name('order.create');

// Langkah 3: Pengguna diarahkan ke halaman checkout untuk konfirmasi (GET).
Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');

// Langkah 4: Form checkout dikirim (POST) untuk menyimpan pesanan FINAL ke database.
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

// Langkah 5: Setelah pesanan disimpan, pengguna diarahkan (GET) ke halaman invoice.
Route::get('/invoice/{transaction_id}', [InvoiceController::class, 'show'])->name('invoice.show');