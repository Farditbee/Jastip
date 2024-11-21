<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PakaianController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('landing.index');});
Route::get('/baju', function () {return view('landing.baju.index');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::group(['prefix' => 'data', 'as' => 'data.', 'middleware' ], function() {

//     Route::resource('dashboard/about', AboutController::class)->except('show');
// });

    // Routing Display
    Route::get('/dashboard/display', [DisplayController::class, 'index'])->name('dashboard.display.index');
    Route::get('/dashboard/display/create', [DisplayController::class, 'create'])->name('dashboard.display.create');
    Route::post('/dashboard/display/store', [DisplayController::class, 'store'])->name('dashboard.display.store');

    // Routing Kategori
    Route::get('/dashboard/kategori', [KategoriController::class, 'index'])->name('dashboard.kategori.index');
    Route::get('/dashboard/kategori/create', [KategoriController::class, 'create'])->name('dashboard.kategori.create');
    Route::post('/dashboard/kategori/store', [KategoriController::class, 'store'])->name('dashboard.kategori.store');
    Route::get('/dashboard/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('dashboard.kategori.edit');
    Route::put('/dashboard/kategori/update/{id}', [KategoriController::class, 'update'])->name('dashboard.kategori.update');
    Route::delete('/dashboard/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('dashboard.kategori.delete');

    Route::get('/dashboard/pakaian', [PakaianController::class, 'index'])->name('dashboard.pakaian.index');
    Route::get('/dashboard/pakaian/create', [PakaianController::class, 'create'])->name('dashboard.pakaian.create');


require __DIR__.'/auth.php';
