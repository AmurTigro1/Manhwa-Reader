<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popular extends Model
{
    use HasFactory;

    protected $fillable = [
        'manhwa_id',
        'title',
        'genre',
        'status',
        'image'
    ];
    public function manhwa() {
        return $this->belongsTo(Manhwa::class);
    }
}
