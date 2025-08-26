<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/events', [EventController::class, 'index'])->name('admin.events.index');
    Route::get('/admin/events/create', [EventController::class, 'create'])->name('admin.events.create');
    Route::post('/admin/events', [EventController::class, 'store'])->name('admin.events.store');
    Route::get('/admin/events/{event}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
    Route::put('/admin/events/{event}', [EventController::class, 'update'])->name('admin.events.update');
    Route::delete('/admin/events/{event}', [EventController::class, 'destroy'])->name('admin.events.destroy');
});

// publik / user biasa
Route::get('/events', [EventController::class, 'publicIndex'])->name('events.index');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');

// Galleries
Route::middleware(['auth', 'admin'])->group(function () {
    // Admin CRUD Gallery
    Route::get('/admin/galleries', [GalleryController::class, 'index'])->name('admin.galleries.index');
    Route::get('/admin/galleries/create', [GalleryController::class, 'create'])->name('admin.galleries.create');
    Route::post('/admin/galleries', [GalleryController::class, 'store'])->name('admin.galleries.store');
    Route::get('/admin/galleries/{gallery}/edit', [GalleryController::class, 'edit'])->name('admin.galleries.edit');
    Route::put('/admin/galleries/{gallery}', [GalleryController::class, 'update'])->name('admin.galleries.update');
    Route::delete('/admin/galleries/{gallery}', [GalleryController::class, 'destroy'])->name('admin.galleries.destroy');
});

// Public Gallery
Route::get('/galleries', [GalleryController::class, 'publicIndex'])->name('galleries.index');
Route::get('/galleries/{gallery}', [GalleryController::class, 'show'])->name('galleries.show');

// komentar (hanya untuk user login)
Route::middleware('auth')->group(function () {
    Route::post('/events/{event}/comments', [CommentController::class, 'store'])->name('comments.store');
});

require __DIR__ . '/auth.php';
