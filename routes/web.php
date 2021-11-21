<?php

use App\Models\admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_islem;
use App\Http\Controllers\genelController;

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
Route::get('/',[admin_islem::class,'adminGiris'])->name('giris');
Route::post('/GetMessage',[admin_islem::class,'adminGirisPost'])->name('giris.post');

Route::get('/kayit',[admin_islem::class,'adminKayit'])->name('kayit');
Route::post('/',[admin_islem::class,'adminKayitPost'])->name('kayit.post');

route::prefix('/')->middleware('isAdmin')->group(function(){

    Route::get('cıkıs',[admin_islem::class,'logout'])->name('logout');

    Route::get('GetMessage',[genelController::class,'index'])->name('index');
});

