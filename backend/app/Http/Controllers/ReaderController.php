<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reader;
use App\Moodels\Manhwa;
class ReaderController extends Controller
{

    public function index() {
        $readers = Reader::with('manhwa')->orderBy('id')->get();
    
        return response()->json($readers);
    }
    
    public function show(Reader $reader) {
        return response()->json($reader);
    }

    // public function show() {
    //     $manhwas = Manwhwa::list();
    //     return response()->json($readers);
    // }
        
        
    public function store(Request $request) {
        $fields = $request->validate([
            'manhwa_id'  => 'required|exists:manhwas,id',
            'name'       => 'required|string',
            'email'      => 'required|email',
            'address'    => 'nullable|string',
        ]);
    
        $reader = Reader::create($fields);
    
        return response()->json([
            'status'  => 'OK',
            'message' => 'Reader with ID# ' . $reader->id . ' has been created',
            'data' => $reader,
        ]);
    }
    

    public function update(Request $request, Reader $reader) {
        $fields = $request->validate([
            'manhwa_id' => 'exists:manhwas,id',
            'name'      => 'string',
            'email'     => 'string',
            'address'   => 'string',
        ]);
    
        $reader->update($fields);
    
        return response()->json([
            'status'  => 'OK',
            'message' => 'Reader with ID# ' . $reader->id . ' has been updated.',
            'data' => $reader,
        ]);
    }
    

    public function destroy(Reader $reader) {
        $reader->delete();
    
        return response()->json([
            'status'  => 'OK',
            'message' => 'The reader ' . $reader->name . ' has been deleted.',
        ]);
    }
    
}
