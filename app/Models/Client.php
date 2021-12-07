<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'company',
        'address',
        'city',
        'state',
        'zip',
        'country',
    ];

    protected $hidden = [
    ];

    public function enquiries() {
        return $this->hasMany(Enquiry::class);
    }

}
