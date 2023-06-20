<?php

use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
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

Route::get('product/', [ProductController::class, 'index'])->name('product.all');
// Route::get('product/{id}', [ProductController::class, 'product'])->name('product.view');
Route::get('/product/create', [ProductController::class, 'goToCreatePage'])->name('product.create.view');
Route::post('product/create/', [ProductController::class, 'createProduct'])->name('product.create');
Route::get('product/edit/{id}', [ProductController::class, 'editProduct'])->name('product.edit');
Route::put('product/edit/{id}', [ProductController::class, 'updateProduct'])->name('product.update');
Route::post('product/delete/{id}', [ProductController::class, 'deleteproduct'])->name('product.delete');



Route::controller(CatagoryController::class)->group(function(){
    Route::get('catagories/', 'catagories');
    Route::get('catagory/{id}', 'catagory');
    Route::post('catagories/', 'addcatagory');
    Route::put('catagory/edit/{id}', 'editcatagory');
    Route::delete('catagory/delete/{id}', 'deletecatagory');

});
Route::get('index/', function(){
    return view('tables');
});

Route::controller(ClientController::class)->group(function(){
    Route::get('Clients/', 'clients');
    Route::get('catagory/{id}', 'client');
    Route::post('Clients/', 'addclient');
    Route::put('client/edit/{id}', 'editclient');
    Route::delete('Client/delete/{id}', 'deleteclient');

});
