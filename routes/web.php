<?php

use App\Http\Livewire\Pages\BaRekon;
use App\Http\Livewire\Pages\Welcome;
use App\Http\Livewire\Pages\Profile;
use App\Http\Livewire\Pages\Settings\Lokasi;
use App\Http\Livewire\Pages\Settings\User;
use App\Http\Livewire\Pages\Auth\Login;
use App\Http\Livewire\Pages\ObjectSewa;
use App\Http\Livewire\Pages\Settings\LokasiDetail;
use App\Http\Livewire\Pages\Settings\Periode;
use App\Http\Livewire\Pages\Ubahdata;
use App\Http\Livewire\Pages\UploadBa;
use App\Http\Livewire\Peruntukan\Edit;
use App\Http\Livewire\Peruntukan\Logs;
use App\Http\Livewire\Peruntukan\Show;
use App\Http\Livewire\Settings\Permission;
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
  Route::get('/ba-rekon', BaRekon::class)->name('ba-rekon');
  Route::get('/object-sewa', ObjectSewa::class)->name('object-sewa');
  Route::get('/profile', Profile::class)->name('profile');
  Route::get('/ubahdata', Ubahdata::class)->name('ubahdata');
  Route::get('/peruntukan/{peruntukan}', Show::class)->name('peruntukan.show');
  Route::get('/peruntukan/{peruntukan}/edit', Edit::class)->name('peruntukan.edit');
  Route::get('/peruntukan/{peruntukan}/logs', Logs::class)->name('peruntukan.logs');
  Route::get('/logs/{logperuntukan}/edit', \App\Http\Livewire\Logs\Edit::class)->name('logs.edit');
  Route::get('/upload-ba', UploadBa::class)->name('upload-ba');

  Route::prefix('setting')->group(function () {
    Route::get('/user', User::class)->name('settings.user');
    Route::get('/periode', Periode::class)->name('settings.periode');
    Route::get('/lokasi', Lokasi::class)->name('settings.lokasi');
    Route::get('/permission', Permission::class)->name('settings.permission');
    Route::get('/lokasi/{lokasi}', LokasiDetail::class)->name('settings.lokasi.detail');
  });

});