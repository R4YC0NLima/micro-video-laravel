<?php

//use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('api')->group(function() {
    $exceptCreateAndEdit = ['except' => ['create', 'edit']];
    Route::resource('categories', CategoryController::class, $exceptCreateAndEdit);
    Route::resource('genres', GenreController::class, $exceptCreateAndEdit);
});


