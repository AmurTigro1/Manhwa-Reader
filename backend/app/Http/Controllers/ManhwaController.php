<?php

namespace App\Http\Controllers;
use App\Models\Manhwa;
use App\Models\Popular;
use App\Models\Reader;
use Illuminate\Http\Request;

class ManhwaController extends Controller
{
    public function getImage(Manhwa $manhwa) {
        $manhwa = Manhwa::findOrFail($manhwa);

        if ($mahwa->image) {
            $path = Storage::disk('public')->path($manhwa->image);
            return response()->file($path);
        }

        return response()->json(['message' => 'Image not found'], 404);
    }

    public function index() {
        $manhwa = manhwa::orderBy('id')->get();
        return response()->json($manhwa);
    }

    public function show(Manhwa $mahwa) {
        $manhwa->load('order');
        return response()->json($manhwa);
    }
}
