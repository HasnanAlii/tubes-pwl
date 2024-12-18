<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Product;

use Illuminate\Http\Request;

class CabangController extends Controller
{
  
  
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:15',
        ]);

        $cabang = Cabang::create($validated);
        return response()->json($cabang, 201);
    }
        
}
