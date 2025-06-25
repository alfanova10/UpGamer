<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            // ▼▼▼ TAMBAHKAN 4 BARIS INI ▼▼▼
            $table->string('name');
            $table->text('comment');
            $table->unsignedTinyInteger('rating');
            $table->boolean('is_visible')->default(true);
            // ▲▲▲ AKHIR DARI TAMBAHAN ▲▲▲
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
