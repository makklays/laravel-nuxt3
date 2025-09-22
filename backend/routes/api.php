<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/profiles/{id}', [ApiController::class, 'get_user_profile_one'])->whereNumber('id');
Route::put('/profiles/{id}', [ApiController::class, 'put_user_profile_one'])->whereNumber('id');

Route::get('/hello', fn() => ['message' => 'Hola desde Laravel API']);

