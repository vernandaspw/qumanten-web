<?php

use App\Http\Livewire\Private\User\UserIndex;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// Auth::loginUsingId(1);
// Auth::logout();

Route::get('/', function () {
    return view('pages.public.landingqumanten.beranda');
});




Route::get('/tidakaktif', function () {
    return view('pages.public.akun-tidak-aktif-page');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.private.dashboard');
    })->middleware(['role:superadmin,finance,admin'])->name('dashboard');
    Route::get('/user', UserIndex::class);
});

require __DIR__ . '/auth.php';
