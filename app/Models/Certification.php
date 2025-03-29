<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Certification extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'issuer',
        'issued_date',
        'link_to_verify',
        'image',
    ];

    // Ensure issued_date is treated as a date
    protected $casts = [
        'issued_date' => 'date',
    ];
}
