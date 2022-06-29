<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


//////////// public routes
// Route::resource('/products', ProductController::class); // all crud bassed defaullts
Route::get('/products', [ProductController::class, 'index'] );
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);

/////////// protected routes
Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
    

});


/////////// Individual routes whice are in  resource of crud bassed defaullts
// // show all
// Route::get('/products', [ProductController::class, 'index'] );

// // add one
// Route::post('/products', [ProductController::class, 'store']);

// show one
//  Route::get('/products/{id}', [ProductController::class, 'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
