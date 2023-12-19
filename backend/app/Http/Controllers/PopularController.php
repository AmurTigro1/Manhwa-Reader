<?php

namespace App\Http\Controllers;
use App\Models\Popular;
use App\Models\Manhwa;
use App\Models\Reader;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    public function getImage(Popular $popular) {
        $popular = Popular::findOrFail($popular);

        if ($popular->image) {
            $path = Storage::disk('public')->path($popular->image);
            return response()->file($path);
        }

        return response()->json(['message' => 'Image not found'], 404);
    }

    public function index() {
        $manhwa = Manhwa::orderBy('id')->get();
        return response()->json($manhwa);
    }

}
