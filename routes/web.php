<?php

use App\Http\Controllers\AdminDashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\productcontroller;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




Route::get('/contact',[contactcontroller::class,'index'])->name('contact');
Route::get('/home',[homecontroller::class,'index'])->name('home');
Route::get('/product',[productcontroller::class,'index'])->name('product');




Route::get('/AdminDashboard',[AdminDashboard::class,'adminDashboard'])->name('AdminDashboard');
Route::get('/totalusers',[AdminDashboard::class,'totalusers'])->name('totalusers');


Route::get('/addproduct',[AdminDashboard::class,'addproduct'])->name('addproduct');
Route::get('/order',[AdminDashboard::class,'order'])->name('order');
