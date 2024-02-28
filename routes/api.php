<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [UserController::class, 'getUsers']);
Route::get('/users/{user_id}', [UserController::class, 'getUserById']);
Route::post('/users', [UserController::class, 'createUser']);
Route::put('/users/{user_id}', [UserController::class, 'updateUser']);
Route::delete('/users/{user_id}', [UserController::class, 'deleteUser']);

Route::get('/address', [AddressController::class, 'getAddresses']);
Route::get('/address/{address_id}', [AddressController::class, 'getAddressById']);

Route::get('/state', [StateController::class, 'getStates']);
Route::get('/state/{state_id}', [StateController::class, 'getStateById']);


Route::get('/city', [CityController::class, 'getCities']);
Route::get('/city/{city_id}', [CityController::class, 'getCityById']);