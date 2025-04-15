<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ItemsController;
/*
Route::get('/', function () {
    return view('pages.home');
});
*/
Route::get('/', function () {
    return redirect(route('login'));
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('pages.home');
Route::get('/home1', [App\Http\Controllers\HomeController::class, 'home1'])
    ->name('pages.home1');
    //->middleware('auth');
Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])
    ->name('crossapplication.settings');
Route::get('/customers', [App\Http\Controllers\HomeController::class, 'customers'])
    ->name('crossapplication.customers');
Route::get('/supplier', [App\Http\Controllers\HomeController::class, 'supplier'])
    ->name('crossapplication.supplier');
Route::get('/items', [App\Http\Controllers\HomeController::class, 'items'])
    ->name('crossapplication.items');

Route::post('/store', [CodesController::class, 'store'])->name('store');
Route::get('/getall', [CodesController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [CodesController::class, 'edit'])->name('edit');
Route::post('/codes/update', [CodesController::class, 'update'])->name('update');
Route::delete('/codes/delete', [CodesController::class, 'delete'])->name('delete');

Route::post('/storecustomer', [CustomerController::class, 'storecustomer'])->name('storecustomer');
Route::get('/getall', [CustomerController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [CustomerController::class, 'edit'])->name('edit');
Route::post('/codes/update', [CustomerController::class, 'update'])->name('update');
Route::delete('/codes/delete', [CustomerController::class, 'delete'])->name('delete');

Route::post('/storesupplier', [SupplierController::class, 'storesupplier'])->name('storesupplier');
Route::get('/getall', [SupplierController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [SupplierController::class, 'edit'])->name('edit');
Route::post('/codes/update', [SupplierController::class, 'update'])->name('update');
Route::delete('/codes/delete', [SupplierController::class, 'delete'])->name('delete');

Route::post('/storeitems', [ItemsController::class, 'storeitems'])->name('storeitems');
Route::get('/getall', [ItemsController::class, 'getall'])->name('getall');
Route::get('/codes/{id}/edit', [ItemsController::class, 'edit'])->name('edit');
Route::post('/codes/update', [ItemsController::class, 'update'])->name('update');
Route::delete('/codes/delete', [ItemsController::class, 'delete'])->name('delete');


/*
Route::get('/', function () {
    return view('auth.login');
})->middleware(['auth', 'verified'])->name('pages.home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

//require __DIR__.'/auth.php';