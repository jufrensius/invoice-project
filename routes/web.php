<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\{
    DashboardController,
    CustomerController,
    VendorController,
    StatusController,
    BankController,
    ItemController,
    InvoiceController,
};

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

Route::get('/', [DashboardController::class, 'index']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource([]);

// Route::resources([
//     'customer' => CustomerController::class,
//     'vendor' => VendorController::class,
//     'status' => StatusController::class,
//     'bank' => BankController::class,
//     'item' => ItemController::class,
//     'invoice' => InvoiceController::class,
// ]);
// Route::resource('customers', CustomerController::class);
// Auth::routes();
