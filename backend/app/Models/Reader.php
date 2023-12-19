<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;

    protected $fillable = [
        'manhwa_id',
        'name',
        'email',
        'address'
    ];
    public function manhwa() {
        return $this->belongsTo(Manhwa::class);
    }
}
