<?php
use App\Http\Controllers\Homecontroller;
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

Route::get('/', [Homecontroller::class,'dashboard'])->name('dashboard');
Route::get('/user', [Homecontroller::class,'index'])->name('dashboard.admin');
Route::get('/create', [Homecontroller::class,'create'])->name('user.create');
Route::post('/store', [Homecontroller::class,'store'])->name('user.store');

Route::get('/edit/{id}', [Homecontroller::class,'edit'])->name('user.edit');
Route::put('/update/{id}', [Homecontroller::class,'update'])->name('user.update');
Route::delete('/delete/{id}', [Homecontroller::class,'delete'])->name('user.delete');


Route::get('/halaman', [Homecontroller::class,'halaman'])->name('dashboard.guru.bk');
Route::get('/general', [Homecontroller::class,'general'])->name('dashboard.guru');

 