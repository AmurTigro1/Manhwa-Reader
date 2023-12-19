<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manhwa extends Model
{
    use HasFactory;

    protected $fillable = [
        'manhwa_id',
        'title',
        'genre',
        'status',
        'image'
    ];
    public function popular()
    {
        return $this->hasMany(Popular::class);
    }

    public function reader()
    {
        return $this->hasMany(Reader::class);
    }

    public static function list() {
        $manhwas = Manhwa::orderByRaw("title")->get();
        $list = [];
        foreach ($manhwas as $manhwa) {
            $list[$manhwa->id] = $manhwa->title;
        }

        return $list;
    }   
}
