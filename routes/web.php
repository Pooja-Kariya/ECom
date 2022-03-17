<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DropdownController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SecretController;
use App\Http\Controllers\TransactionController;

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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*----------------------------------------------------Users------------------------------------------------------------ */

Route::view('/menus', 'layouts.menus');

Route::view('/dashboard', 'dash')->name('dash');

// Route::middleware('auth')->group(function(){

//     Route::get('/add_user', [UserController::class, 'add'])->name('users.add');

//     Route::post('/store_user', [UserController::class, 'store'])->name('users.store');

//     Route::get('/manage_user', [UserController::class, 'index'])->name('users.index');

//     Route::get('user/edit/{id}',[UserController::class,'edit'])->name('user.edit');

//     Route::post('user/update/{id}',[UserController::class,'update'])->name('user.update');

//     // Route::get('edit/{id}',[UserController::class,'edit'])->name('users.edit');

//     // Route::post('update/{id}',[UserController::class,'update'])->name('user.update');

//     Route::get('user/delete/{id}',[UserController::class,'delete'])->name('user.delete');
// });





    Route::get('/add_user', [UserController::class, 'create'])->name('users.create');

    Route::post('api/fetch-states', [UserController::class, 'fetchState']);

    Route::post('api/fetch-cities', [UserController::class, 'fetchCity']);

    // Route::post('api/fetch-roleid', [UserController::class, 'fetchroleid']);

    Route::post('/store_user', [UserController::class, 'store'])->name('users.store');

    Route::get('/manage_user', [UserController::class, 'index'])->name('users.index');

    Route::get('user/edit/{id}',[UserController::class,'edit'])->name('users.edit');

    Route::post('user/update/{id}',[UserController::class,'update'])->name('users.update');

    Route::get('user/delete/{id}',[UserController::class,'delete'])->name('users.delete');

    // Route for export csv button
    Route::get('/user/export_format/{format}',[UserController::class,'export_format'])->name('users.export_format');

    // Route for import
    Route::post('/user/import',[UserController::class,'import'])->name('users.import');

    // Route for export excel button
    Route::get('/user/export',[UserController::class,'export'])->name('users.export');


/*----------------------------------------------------Products------------------------------------------------------------ */

Route::get('/add_product', [ProductController::class, 'add'])->name('products.add');

Route::post('api/fetch-secrets', [ProductController::class, 'fetchsecretcode']);

Route::post('/store_product', [ProductController::class, 'store'])->name('products.store');

Route::get('/manage_product', [ProductController::class, 'index'])->name('products.index');


Route::get('product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');

Route::post('product/update/{id}',[ProductController::class,'update'])->name('product.update');

Route::get('product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');

// Route for export csv button
Route::get('/product/export_format/{format}',[ProductController::class,'export_format'])->name('products.export_format');

// Route for import
Route::post('/product/import',[ProductController::class,'import'])->name('products.import');

// Route for export excel button
Route::get('/product/export',[ProductController::class,'export'])->name('products.export');

/*----------------------------------------------------Roles------------------------------------------------------------ */

Route::get('/add_role', [RoleController::class, 'add'])->name('roles.add');

Route::post('/store_role', [RoleController::class, 'store'])->name('roles.store');

Route::get('/manage_role', [RoleController::class, 'index'])->name('roles.index');


Route::get('roles/edit/{id}',[RoleController::class,'edit'])->name('roles.edit');

Route::post('roles/update/{id}',[RoleController::class,'update'])->name('role.update');

Route::get('roles/delete/{id}',[RoleController::class,'delete'])->name('role.delete');

// Route for export csv button
Route::get('/role/export_format/{format}',[RoleController::class,'export_format'])->name('roles.export_format');

// Route for import
Route::post('/role/import',[RoleController::class,'import'])->name('roles.import');

// Route for export excel button
Route::get('/role/export',[RoleController::class,'export'])->name('roles.export');

/*----------------------------------------------------Orders------------------------------------------------------------ */

Route::get('/manage_order', [OrderController::class, 'index'])->name('orders.index');


Route::get('orders/edit/{id}',[OrderController::class,'edit'])->name('orders.edit');

Route::post('orders/update/{id}',[OrderController::class,'update'])->name('orders.update');

Route::get('orders/delete/{id}',[OrderController::class,'delete'])->name('orders.delete');

// Route for export csv button
Route::get('/order/export_format/{format}',[OrderController::class,'export_format'])->name('orders.export_format');

// Route for import
Route::post('/order/import',[OrderController::class,'import'])->name('orders.import');

// Route for export excel button
Route::get('/order/export',[OrderController::class,'export'])->name('orders.export');

/*----------------------------------------------------Secrets------------------------------------------------------------ */

Route::get('/manage_secret', [SecretController::class, 'index'])->name('secrets.index');


Route::get('secret/edit/{id}',[SecretController::class,'edit'])->name('secrets.edit');

Route::post('secret/update/{id}',[SecretController::class,'update'])->name('secrets.update');

Route::get('secret/delete/{id}',[SecretController::class,'delete'])->name('secrets.delete');

// Route for export csv button
Route::get('/secret/export_format/{format}',[SecretController::class,'export_format'])->name('secrets.export_format');

// Route for import
Route::post('/secret/import',[SecretController::class,'import'])->name('secrets.import');

// Route for export excel button
Route::get('/secret/export',[SecretController::class,'export'])->name('secrets.export');

/*----------------------------------------------------Transactions------------------------------------------------------------ */

Route::get('/manage_transaction', [TransactionController::class, 'index'])->name('transactions.index');


Route::get('edit/{id}',[TransactionController::class,'edit'])->name('transactions.edit');

Route::post('update/{id}',[TransactionController::class,'update'])->name('transactions.update');

Route::get('delete/{id}',[TransactionController::class,'delete'])->name('transactions.delete');

// Route for export csv button
Route::get('/transaction/export_format/{format}',[TransactionController::class,'export_format'])->name('transactions.export_format');

// Route for import
Route::post('/transaction/import',[TransactionController::class,'import'])->name('transactions.import');

// Route for export excel button
Route::get('/transaction/export',[TransactionController::class,'export'])->name('transactions.export');

/*-------------------------------------------------dropdown------------------------------------------------------------*/
// Route::get('/add_user', [UserController::class, 'create'])->name('users.create');;
// Route::post('api/fetch-states', [UserController::class, 'fetchState']);
// Route::post('api/fetch-cities', [UserController::class, 'fetchCity']);
// Route::post('/store_user', [UserController::class, 'store'])->name('users.store');
// Route::get('/manage_user',[UserController::class,'index'])->name('users.index');

Route::post('api/fetch-states', [RegisteredUserController::class, 'fetchState']);
Route::post('api/fetch-cities', [RegisteredUserController::class, 'fetchCity']);
