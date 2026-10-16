<?php

use App\Http\Controllers\BiayaController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\ExportCostCalculationController;
use App\Http\Controllers\ForwarderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UndernameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return redirect()->route('login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('supplier', SupplierController::class);
    Route::resource('buyer', BuyerController::class);
    Route::resource('product', ProductController::class);
    Route::resource('biaya', BiayaController::class);
    Route::resource('forwarder', ForwarderController::class);
    Route::resource('undername', UndernameController::class);
});

Route::middleware(['auth', 'role:operasional'])->group(function () {
    Route::resource('export_cost_calculation', ExportCostCalculationController::class);
});

Route::middleware(['auth', 'role:sales'])->group(function () {
    Route::get('/dokumen_penjualan/quotation/{id}', [DokumenController::class, 'showQuotation'])->name('dokumen.quotation');
    Route::resource('dokumen_penjualan', DokumenController::class);
    Route::get(
        '/sales-contract/generate/{quotation}',
        [DokumenController::class, 'generateSC']
    )->name('sales-contract.generate');
    Route::get(
        '/dokumen_penjualan/sales_contract/{id}',
        [DokumenController::class, 'showSC']
    )->name('sales-contract.show');
});

require __DIR__.'/auth.php';
