<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->unique()->nullable();
            $table->string('game_name'); // <-- INI YANG HILANG
            $table->string('item_name'); // <-- INI YANG HILANG
            $table->unsignedBigInteger('price'); // <-- INI YANG HILANG
            $table->string('user_id_game'); // <-- INI YANG HILANG
            $table->string('email'); // <-- INI YANG HILANG
            $table->string('payment_method'); // <-- INI YANG HILANG
            $table->string('status')->default('pending'); // <-- INI YANG HILANG
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('orders'); }
};