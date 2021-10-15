<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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


Route::get('/', [productController::class, 'home'])->name('home');
Route::get('/add', [productController::class, 'add'])->name('add');
Route::post('/add', [productController::class, 'addProduct'])->name('add');
Route::get('/edit/{id}', [productController::class, 'edit']);
Route::get('/details/{id}', [productController::class, 'details']);
Route::get('/delete/{id}', [productController::class, 'delete']);
Route::post('/edit', [productController::class, 'updateData'])->name('edit');
Route::get('/products', [productController::class, 'products'])->name('products');
Route::get('/team', [productController::class, 'team'])->name('team');
Route::get('/contactus', [productController::class, 'contactus'])->name('contactus');
Route::get('/aboutus', [productController::class, 'aboutus'])->name('aboutus');