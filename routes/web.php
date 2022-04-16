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

Route::get('/', [DashboardController::class, 'index'])->name('home');

Auth::routes();

Route::resources([
    'customers' => CustomerController::class,
    'vendors' => VendorController::class,
    'statuses' => StatusController::class,
    'banks' => BankController::class,
    'items' => ItemController::class,
    'invoices' => InvoiceController::class,
]);
