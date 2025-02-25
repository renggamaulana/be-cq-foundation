<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'collected_fund',
        'target_fund',
        'deadline',
        'progress',
        'image',
    ];

    protected $casts = [
        'deadline' => 'datetime', // Mengatur tipe data deadline menjadi datetime
    ];
}
