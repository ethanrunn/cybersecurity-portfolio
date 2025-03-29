<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/projects', [PortfolioController::class, 'projects']);
Route::get('/contact', [PortfolioController::class, 'contact']);
Route::post('/contact', [PortfolioController::class, 'submitContact'])->name('contact.submit');
Route::get('/blog', [PortfolioController::class, 'blog']);
Route::get('/certifications', [PortfolioController::class, 'certifications']);
Route::get('/work-experience', [PortfolioController::class, 'work-experience']);
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blog.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
