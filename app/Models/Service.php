<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
        'price',
    ];

    public function extras() {
        return $this->hasMany(Extra::class);
    }

    public function limo() {
        return $this->belongsToMany(Limo::class);
    }
}
