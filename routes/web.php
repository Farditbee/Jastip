<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DisplayController;
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

    Route::get('/dashboard/display', [DisplayController::class, 'index'])->name('dashboard.display.index');
    Route::get('/dashboard/display/create', [DisplayController::class, 'create'])->name('dashboard.display.create');
    Route::post('/dashboard/display/store', [DisplayController::class, 'store'])->name('dashboard.display.store');


require __DIR__.'/auth.php';
