<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'role',
        'description',
        'start_date',
        'end_date',
        'location',
    ];

    // Ensure dates are cast correctly
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}