<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $products = Product::all();
    //     return view('products.index', compact('products'));
    // }
    public function index(Request $request)
    {
        $cabangId = $request->input('cabang_id');
    
        if ($cabangId) {
            $products = Product::where('cabang_id', $cabangId)->get();
        } else {
            $products = Product::all(); 
        }
    
        $cabang = Cabang::all(); 
    
        return view('products.index', compact('cabang','products'));
    }
    public function show(Request $request)
    {
    
    $user = auth()->user();
    
    $products = Product::where('cabang_id', $user->cabang_id)->get(); 
    
    return view('products.indexother', compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cabang_id' => 'required|exists:cabang,id',
            'name' => 'required|string|max:255',
            'sku' => 'required|string|unique:products,sku',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'stock_min' => 'required|integer',
        ]);

        $product = Product::create($validated);
        return response()->json($product, 201);
    }
}
