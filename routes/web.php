<?php

use App\Http\Controllers\AuthController;
use App\Models\InnerCity;
use App\Models\Lodging;
use App\Models\OuterCity;
use App\Models\Packet;
use App\Models\RestoBar;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     $packet         = Packet::get();
//     $outer_city     = OuterCity::get();
//     $inner_city     = InnerCity::get();
//     $lodging        = Lodging::get();
//     return view('front.booking.index', [
//         'packet'            => $packet,
//         'outer_city'        => $outer_city,
//         'inner_city'        => $inner_city,
//         'lodging'           => $lodging,

//     ]);
// });


Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        // Caching untuk Packet
        $packet = Cache::remember('packets', 60, function () {
            return Packet::all();
        });

        // Caching untuk OuterCity
        $outer_city = Cache::remember('outer_cities', 60, function () {
            return OuterCity::all();
        });

        // Caching untuk InnerCity
        $inner_city = Cache::remember('inner_cities', 60, function () {
            return InnerCity::all();
        });

        // Caching untuk Lodging
        $lodging = Cache::remember('lodgings', 60, function () {
            return Lodging::all();
        });

        // Caching untuk Resto Bar
        $resto_bar = Cache::remember('resto_bars', 60, function () {
            return RestoBar::all();
        });

        return view('front.booking.index', [
            'packet'     => $packet,
            'outer_city' => $outer_city,
            'inner_city' => $inner_city,
            'lodging'    => $lodging,
            'resto_bar'  => $resto_bar,
        ]);
    });
});


// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});
