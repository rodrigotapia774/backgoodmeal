<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Controller use
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MermaProductController;

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

Route::resource('products', ProductController::class);
Route::resource('merma-products', MermaProductController::class);
//Route::get('products', 'productController@index');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
