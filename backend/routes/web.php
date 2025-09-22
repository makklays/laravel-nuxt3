<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// api
/*Route::prefix('api')->group(function () { // ->middleware('api')
    // /api/profile/{id}
    Route::get('/profiles/{id}', [App\Http\Controllers\ApiController::class, 'get_user_profile_one'])->where(['id' => '[0-9]+']);
    Route::put('/profiles/{id}', [App\Http\Controllers\ApiController::class, 'put_user_profile_one'])->where(['id' => '[0-9]+']);

    Route::get('/hello', fn() => ['message' => 'Hola desde Laravel 12 API']);
});*/

