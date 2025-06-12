<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    /**
     * Menerima data dari halaman produk, menyimpannya di session,
     * dan menampilkan halaman checkout.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'game_name'  => 'required|string',
            'item_name'  => 'required|string',
            'price'      => 'required|numeric',
            'game_image' => 'required|string'
        ]);

        $request->session()->put('order_details', $validated);

        return redirect()->route('checkout.show');
    }

    /**
     * Menyimpan pesanan FINAL dari halaman checkout ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'game_name'      => 'required|string|max:255',
            'item_name'      => 'required|string|max:255',
            'price'          => 'required|numeric|min:0',
            'user_id'        => 'required|string|max:255',
            'email'          => 'required|email|max:255',
            'payment_method' => 'required|string|max:255',
        ]);

        try {
            DB::beginTransaction();

            // Gunakan Order::create yang membutuhkan $fillable di Model
            $order = Order::create([
                'game_name'      => $validated['game_name'],
                'item_name'      => $validated['item_name'],
                'price'          => $validated['price'],
                'user_id_game'   => $validated['user_id'],
                'email'          => $validated['email'],
                'payment_method' => $validated['payment_method'],
                'status'         => 'pending',
            ]);

            $prefixMap = [
                'Mobile Legends' => 'ML', 'Free Fire' => 'FF', 'Genshin Impact' => 'GI', 
                'PUBG Mobile' => 'PM', 'Roblox' => 'RB', 'Wuthering Waves' => 'WW'
            ];
            $prefix = $prefixMap[$validated['game_name']] ?? 'UG';
            $transactionId = 'UPG' . $prefix . now()->format('Ymd') . $order->id;

            $order->transaction_id = $transactionId;
            $order->save();

            DB::commit();

            $request->session()->forget('order_details');

            return redirect()->route('invoice.show', ['transaction_id' => $order->transaction_id]);

        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error('Gagal menyimpan pesanan: ' . $e->getMessage());
            return back()->withInput()->withErrors(['db_error' => 'Terjadi kesalahan internal saat membuat pesanan. Silakan coba lagi.']);
        }
    }
}