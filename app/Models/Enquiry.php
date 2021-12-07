<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected  $fillable = [
        'datetime',
        'location',
        'limo_id',
        'client_id',
        'service_id',
        'passengers',
        'reason',
        'payment_id',
        'airline',
        'flight_number',
        'flight_time',
        'terminal',
        'payment_detail_id',
        'status'
    ];

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function limo() {
        return $this->belongsTo(Limo::class);
    }

    public  function service() {
        return $this->belongsTo(Service::class);
    }
}
