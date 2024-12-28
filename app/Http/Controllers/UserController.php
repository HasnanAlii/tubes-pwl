<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
{
    $cabangId = $request->input('cabang_id');
    
    if ($cabangId) {
        $users = User::where('cabang_id', $cabangId)->get();
    } else {
        $users = User::all(); 
    }

    $cabang = Cabang::all(); 
    
    return view('users.index', compact('cabang', 'users'));    
}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6',
            'role' => 'required|in:owner,manager,supervisor,cashier,warehouse',
            'cabang_id' => 'nullable|exists:cabang,id',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);
        return response()->json($user, 201);
    }
}
