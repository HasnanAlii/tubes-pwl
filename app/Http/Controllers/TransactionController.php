<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
        {
        
        $user = auth()->user();
        
        $transactions= Transaction::where('cabang_id', $user->cabang_id)->get(); 
        
        return view('transactions.index', compact('transactions'));
        
       
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cabang_id' => 'required|exists:cabang,id',
            'user_id' => 'required|exists:users,id',
            'total' => 'required|numeric',
            'details' => 'required|array',
            'details.*.product_id' => 'required|exists:products,id',
            'details.*.quantity' => 'required|integer',
            'details.*.price' => 'required|numeric',
        ]);

        $transaction = Transaction::create([
            'cabang_id' => $validated['cabang_id'],
            'user_id' => $validated['user_id'],
            'total' => $validated['total'],
        ]);

        foreach ($validated['details'] as $detail) {
            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'product_id' => $detail['product_id'],
                'quantity' => $detail['quantity'],
                'price' => $detail['price'],
                'subtotal' => $detail['quantity'] * $detail['price'],
            ]);

            $product = Product::find($detail['product_id']);
            $product->decrement('stock', $detail['quantity']);
        }

        return response()->json($transaction, 201);
    }
}

