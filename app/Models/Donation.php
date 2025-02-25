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
        // 'progress',
        'image',
    ];
    // Accessor untuk progress
    public function getProgressAttribute()
    {
        if ($this->target_fund > 0) {
            return min(100, round(($this->collected_fund / $this->target_fund) * 100, 2));
        }
        return 0;
    }


    protected $casts = [
        'deadline' => 'datetime', // Mengatur tipe data deadline menjadi datetime
    ];
}
