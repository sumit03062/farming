<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\PageController;

Route::get('/sitemap.xml', [SitemapController::class, 'index']);

// Pages

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/services', [PageController::class, 'services'])->name('services');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/products', [PageController::class, 'products'])->name('products');

















Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
