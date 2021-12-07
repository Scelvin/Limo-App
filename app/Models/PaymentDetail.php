<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    use HasFactory;

    protected  $fillable = [
        'extras_amount',
        'service_amount',
        'tax',
        'total',
        'deposit_required',
    ];
}
