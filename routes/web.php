<?php

use Illuminate\Support\Facades\Http;
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

// Route::get('/', function () {
//     return view('auth.login');
// });
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminAuthController;

Route::get('/proxy/whois', function (Illuminate\Http\Request $request) {
    $domain = $request->query('domain');
    $response = Http::get('https://portal.qwords.com/apitest/whois.php', [
        'domain' => $domain,
    ]);
    return $response->json();
});

Route::get('/login', [AdminAuthController::class, 'index'])->name('login');
Route::post('/proses', [AdminAuthController::class, 'doLogin'])->name('proses.login');
Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');

Route::get('/', [BaseController::class, 'index'])->name('home');
Route::get('/konfiurasi/{domain}', [BaseController::class, 'konfigurasi'])->name('konfigurasi');
Route::post('/invoice', [BaseController::class, 'invoice'])->name('invoice');
Route::get('/invoice/pdf/{nama}/{email}/{domain}/{harga}', [BaseController::class, 'generatePDF'])->name('generatePDF');
