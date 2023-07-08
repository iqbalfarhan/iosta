<?php

use App\Http\Livewire\Pages\Welcome;
use App\Http\Livewire\Pages\Profile;
use App\Http\Livewire\Pages\Settings\Lokasi;
use App\Http\Livewire\Pages\Settings\User;
use App\Http\Livewire\Pages\Auth\Login;
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
  return redirect('home');
});

Route::middleware('guest')->group(function () {
  Route::get('/login', Login::class)->name('login');
});

Route::middleware('auth')->group(function () {
  Route::get('/home', Welcome::class)->name('home');
  Route::get('/profile', Profile::class)->name('profile');
  Route::get('/setting/lokasi', Lokasi::class)->name('settings.lokasi');
  Route::get('/setting/user', User::class)->name('settings.user');
});