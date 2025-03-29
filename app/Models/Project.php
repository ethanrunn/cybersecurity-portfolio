<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'github_link',
        'live_demo',
        'images',
        'tech_stack',
        'completion_date',
    ];

    protected $casts = [
        'completion_date' => 'date',
        'images' => 'array', // Automatically convert JSON string to array
    ];
}
