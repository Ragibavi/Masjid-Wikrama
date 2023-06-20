<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Middleware\Authorize;
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

Route::get('/', function(){
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'login']);

Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/donatur', [DonaturController::class, 'index']);

Route::get('/login', [DonaturController::class, 'login']);

Route::get('/donatur/table', [DonaturController::class, 'showTable'])->name('donatur.showTable');

Route::get('/donatur/login', [DonaturController::class, 'login'])->name('donatur.login');

Route::get('/donatur/create', [DonaturController::class, 'create'])->name('donatur.create');

Route::get('/donatur', [DonaturController::class, 'index'])->name('donatur.index');

Route::post('/donatur', [DonaturController::class, 'store'])->name('donatur.store');

Route::get('/donatur/{id}', [DonaturController::class, 'show'])->name('donatur.show');

Route::get('/donatur/{id}/edit', [DonaturController::class, 'edit'])->name('donatur.edit');

Route::put('/donatur/{id}', [DonaturController::class, 'update'])->name('donatur.update');

Route::delete('/donatur/{id}', [DonaturController::class, 'destroy'])->name('donatur.destroy');