<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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
    $products = Product::where('cabang_id', $user->cabang_id)->paginate(5);
    return view('products.indexother', compact('products'));
}


    public function create()
    {
        $cabangs = Cabang::all(); 
        return view('products.create', compact('cabangs'));
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
        $notification = array(
            'message' => 'Produk berhasil ditambahkan.',
            'alert-type' => 'success'
        );
        return redirect()->route('warehouse.products.indexother')->with($notification);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $notification = array(
            'message' => 'Produk berhasil dihapus.',
            'alert-type' => 'success'
        );

        return redirect()->route('warehouse.products.indexother')->with(  $notification);
    }
 
    public function sellProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
    
        $request->validate([
            'quantity' => 'required|integer|min:1|max:' . $product->stock,
        ]);
    
        $quantity = $request->input('quantity');
        $totalPrice = $quantity * $product->price;
    
        // Kurangi stok produk
        $product->stock -= $quantity;
        $product->save();
    
        // Buat transaksi
        \DB::table('transactions')->insert([
            'cabang_id' => auth()->user()->cabang_id, 
            'user_id' => auth()->id(),
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $product->price,
            'subtotal' => $totalPrice,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        // Kirim notifikasi
        $notification = array(
            'message' => "Produk berhasil terjual! Total harga: Rp. " . number_format($totalPrice, 0, ',', '.') . ",000",
            'alert-type' => 'success',
        );
    
        return redirect()->route('cashier.products.index')->with($notification);
    }
    
public function soldPage($id)
{
    $product = Product::findOrFail($id); // Pastikan produk ditemukan
    return view('products.sold', compact('product'));
}

}
