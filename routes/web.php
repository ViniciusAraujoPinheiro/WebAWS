<?php

use App\Http\Controllers\productsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/products', [productsController::class, 'index'])->middleware(['auth', 'verified'])->name('products.index');


// Rota para exibir o formulário de cadastro
Route::get('/products/create', [productsController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('products.create');

// Rota para salvar o produto
Route::post('/products', [productsController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('products.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
