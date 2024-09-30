<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['total_amount', 'user_id', 'date'];
    protected $casts = [
        'date' => 'datetime'
    ];
}
