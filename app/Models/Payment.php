<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    //developed...
    protected $fillable = [
        // 'order_id',
        // 'amount',
        // 'payment_method',
        // 'status',
        // 'transaction_id',
        // 'payment_date',
    ];

    protected $casts = [
        'payment_date' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
