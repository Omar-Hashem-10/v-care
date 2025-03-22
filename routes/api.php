<?php

use App\Models\Speciality;
use App\Models\DoctorTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\DoctorTitleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(DoctorTitleController::class)->prefix('doctor_title')->group(function(){
    Route::get('/', 'index');
    Route::get('/{doctorTitle}', 'show');
    Route::post('/', 'store');
    Route::put('/{doctorTitle}', 'edit');
    Route::delete('/{doctorTitle}', 'delete');
});

Route::controller(CountryController::class)->prefix('country')->group(function(){
    Route::get('/', 'index');
    Route::get('/{id}', 'show');
    Route::post('/', 'store');
    Route::put('/{country}', 'update');
    Route::delete('/{id}', 'delete');
});

Route::controller(CityController::class)->prefix('city')->group(function(){
    Route::get('/', 'index');
    Route::get('/{id}', 'show');
    Route::post('/', 'store');
    Route::put('/{city}', 'update');
    Route::delete('/{id}', 'delete');
});

Route::controller(ZoneController::class)->prefix('zone')->group(function(){
    Route::get('/', 'index');
    Route::get('/{id}', 'show');
    Route::post('/', 'store');
    Route::put('/{zone}', 'update');
    Route::delete('/{id}', 'delete');
});

Route::controller(SpecialityController::class)->prefix('speciality')->group(function(){
    Route::get('/', 'index');
    Route::get('/{id}', 'show');
    Route::post('/', 'store');
    Route::put('/{speciality}', 'update');
    Route::delete('/{id}', 'delete');
});
