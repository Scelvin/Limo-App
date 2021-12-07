<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
        'price',
        'price_per_person',
    ];

    public function services() {
        return $this->belongsToMany(Service::class);
    }

    public function limo() {
        return $this->belongsToMany(Limo::class);
    }
}
