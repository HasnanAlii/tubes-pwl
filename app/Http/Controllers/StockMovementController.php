<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockMovement;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class StockMovementController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        $stockMovements = StockMovement::where('cabang_id',$user->cabang_id)->get();

        return view('stock-movement.index', compact('stockMovements'));
    }

    public function create()
    {
        $user = auth()->user(); // Mendapatkan user yang sedang login
        $cabangId = $user->cabang_id; // ID cabang berdasarkan user
        $products = Product::where('cabang_id', $cabangId)->get(); // Produk hanya untuk cabang user
    
        return view('stock-movement.edit', compact('user', 'cabangId', 'products'));
    }    

    public function store(Request $request)
{
    $validated = $request->validate([
        'cabang_id' => 'required|exists:cabang,id',
        'product_id' => 'required|exists:products,id',
        'type' => 'required|in:in,out',
        'quantity' => 'required|integer|min:1',
    ]);

    $validated['user_id'] = auth()->id(); // Tambahkan user_id dari pengguna login

    $product = Product::findOrFail($validated['product_id']);

    if ($validated['type'] === 'in') {
        // Tambahkan stok
        $product->stock += $validated['quantity'];
    } else if ($validated['type'] === 'out') {
        // Kurangi stok jika memenuhi syarat
        if ($product->stock - $validated['quantity'] < $product->stock_min) {
            return redirect()->back()->withErrors([
                'quantity' => 'Stok tidak boleh kurang dari stok minimum.',
            ]);
        }
        $product->stock -= $validated['quantity'];
    }

    // Simpan perubahan stok
    $product->save();

    // Buat riwayat stock movement
    StockMovement::create($validated);
    $notification = array(
        'message' => 'Stock berhasil ditambahkan.',
        'alert-type' => 'success'
    );
    

    return redirect()->route('stock-movements.index')->with($notification);
    }

    public function export()
    {
        $stockMovements = StockMovement::with('product')->get();

        $pdf = PDF::loadView('stock-movement.pdf', compact('stockMovements'));
        return $pdf->stream('Stock.pdf'); // Menampilkan PDF langsung
        // return $pdf->download('stock-movement.pdf'); // Untuk langsung diunduh
    }
    
}
