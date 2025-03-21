<?php

use App\Http\Controllers\DoctorTitleController;
use App\Models\DoctorTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
