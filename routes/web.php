<?php

use App\Http\Controllers\CabangController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoansDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StockMovementController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

// dd('Route file is loaded');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//owner
Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('index');
});

//manager
Route::middleware(['auth', 'role:manager'])->group(function () {
    Route::get('/products', [ProductController::class, 'show'])->name('index');
});

//supervisor
Route::middleware(['auth', 'role:supervisor'])->group(function () {
    Route::get('/products', [ProductController::class, 'show'])->name('index');

});

//pegawai gudang
Route::middleware(['auth', 'role:pegawai gudang|kasir'])->group(function () {
    Route::get('/products', [ProductController::class, 'show'])->name('index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/indexother', [ProductController::class, 'show'])->name('products.indexother');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    Route::get('/stock-movements', [StockMovementController::class, 'index'])->name('stock-movements.index');
    Route::get('/stock-movements/create', [StockMovementController::class, 'create'])->name('stock-movements.create');
    Route::post('/stock-movements/store', [StockMovementController::class, 'store'])->name('stock-movements.store');

});

//kasir
Route::middleware(['auth', 'role:kasir'])->group(function () {
    // Route::get('/products', [ProductController::class, 'show'])->name('index');
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');

});

require __DIR__ . '/auth.php';


