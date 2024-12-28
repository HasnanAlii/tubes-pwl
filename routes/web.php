<?php

use App\Http\Controllers\CabangController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoansDetailController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StockMovementController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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

// Owner
Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/owner/products', [ProductController::class, 'index'])->name('owner.products.index');
    Route::get('/owner/transactions', [TransactionController::class, 'index'])->name('owner.transactions.index');
    Route::get('/owner/employee', [UserController::class, 'index'])->name('owner.employee.index');

});

// Manager
Route::middleware(['auth', 'role:manager'])->group(function () {
    Route::get('/manager/products', [ProductController::class, 'show'])->name('manager.products.index');
});

// Supervisor
Route::middleware(['auth', 'role:supervisor'])->group(function () {
    Route::get('/supervisor/products', [ProductController::class, 'show'])->name('supervisor.products.index');
    Route::get('/supervisor/transactions', [TransactionController::class, 'show'])->name('supervisor.transactions.index');
    Route::get('/supervisor/transactions/export-pdf', [TransactionController::class, 'export'])->name('transactions.export-pdf');
    Route::get('/supervisor/warehouse/export-pdf', [StockMovementController::class, 'export'])->name('stock-movement.export-pdf');
    Route::get('/supervisor/stock-movements', [StockMovementController::class, 'index'])->name('supervisor.stock-movements.index');


});

// Pegawai Gudang
Route::middleware(['auth', 'role:pegawai-gudang'])->group(function () {
    Route::get('/warehouse/products', [ProductController::class, 'show'])->name('warehouse.products.index');
    Route::get('/warehouse/products/create', [ProductController::class, 'create'])->name('warehouse.products.create');
    Route::post('/warehouse/products/store', [ProductController::class, 'store'])->name('warehouse.products.store');
    Route::get('/warehouse/products/indexother', [ProductController::class, 'show'])->name('warehouse.products.indexother');
    Route::delete('/warehouse/products/{id}', [ProductController::class, 'destroy'])->name('warehouse.products.destroy');
    Route::get('/warehouse/stock-movements', [StockMovementController::class, 'index'])->name('stock-movements.index');
    Route::get('/warehouse/stock-movements/create', [StockMovementController::class, 'create'])->name('stock-movements.create');
    Route::post('/warehouse/stock-movements/store', [StockMovementController::class, 'store'])->name('stock-movements.store');
});

// Kasir
Route::middleware(['auth', 'role:kasir'])->group(function () {
    Route::get('/cashier/products', [ProductController::class, 'show'])->name('cashier.products.index');
    Route::get('/cashier/products/sell/{id}', [ProductController::class, 'sellProduct'])->name('cashier.products.sold');
    Route::get('/cashier/products/sold/{id}', [ProductController::class, 'soldPage'])->name('cashier.products.sell');
    Route::get('/cashier/transactions', [TransactionController::class, 'show'])->name('cashier.transactions.index');



    

   
});

require __DIR__ . '/auth.php';
