<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'game_name',
        'item_name',
        'price',
        'user_id_game',
        'email',
        'payment_method',
        'status',
    ];
}