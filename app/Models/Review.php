<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // ▼▼▼ TAMBAHKAN BLOK INI ▼▼▼
    protected $fillable = [
        'name',
        'comment',
        'rating',
        'is_visible', // Meskipun ada default, tetap baik untuk dimasukkan
    ];
    // ▲▲▲ AKHIR DARI TAMBAHAN ▲▲▲
}