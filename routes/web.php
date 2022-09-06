<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'index']);

// Route::get('/{id}', [UserController::class, 'calculation']);

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Cleared !';
});

// user things gpoing on

Route::get('create', [ProductController::class, 'create']);
Route::post('savedata', [ProductController::class, 'savedata']);
Route::get('datalist', [ProductController::class, 'datalist']);
Route::get('delete/{id}', [ProductController::class, 'destroy']);
Route::get('view/{id}', [ProductController::class, 'show']);
Route::post('update/{id}', [ProductController::class, 'update']);
Route::get('edit/{id}', [ProductController::class, 'edit']);
// Auth controller function start here


Route::get('register', [AuthController::class, 'register']);
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');


// Route::controller(ProductController::class)->group(function(){
//     Route::get('products', 'index')->name('products.index');
//     Route::post('products', 'store')->name('products.store');
//     // Route::get('products/create', 'create')->name('products.create');
//     Route::get('products/{product}', 'show')->name('products.show');
//     Route::put('products/{product}', 'update')->name('products.update');
//     Route::delete('products/{product}', 'destroy')->name('products.destroy');
//     Route::get('products/{product}/edit', 'edit')->name('products.edit');
// });


Route::get('role',['middleware' => 'Role:editor','uses' => 'TestController@index',
 ]);
