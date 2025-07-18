<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes - Sadece admin kullanıcıları erişebilir
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('admin.dashboard');
    
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('about', AboutController::class);
        Route::resource('education', EducationController::class);
        Route::resource('skills', SkillController::class);
        Route::resource('experiences', ExperienceController::class);
        Route::resource('portfolios', PortfolioController::class);
        Route::resource('certificates', CertificateController::class);
        Route::resource('contacts', ContactController::class);
        Route::resource('users', UserController::class);
    });
});

require __DIR__.'/auth.php';
