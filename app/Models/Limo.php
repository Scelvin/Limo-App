<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Limo extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name',
        'image_path',
        'description',
        'passengers',
        'luggage',
        'status',
    ];

    public function extras() {
        return $this->hasMany(Extra::class);
    }

    public function enquiries() {
        return $this->hasMany(Enquiry::class);
    }
    public function services() {
        return $this->hasMany(Service::class);
    }
}
