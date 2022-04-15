<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CustomerController,
    VendorController,
    StatusController,
    BankController,
    ItemController,
    InvoiceController,
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resources([
    'customer' => CustomerController::class,
    'vendor' => VendorController::class,
    'status' => StatusController::class,
    'bank' => BankController::class,
    'item' => ItemController::class,
    'invoice' => InvoiceController::class,
]);
