<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PatientController::class, 'home']);
Route::get('/all-patients', [PatientController::class, 'all']);
Route::delete('/patients/{personId}', [PatientController::class, 'softDelete']);
Route::delete('/patients/trashed/{personId}', [PatientController::class, 'forceDelete']);
Route::get('/create1', [PatientController::class, 'createFirst']);
Route::post('/create1', [PatientController::class, 'storeFirst']);
Route::get('/create2', [PatientController::class, 'createSecond']);
Route::post('/create2', [PatientController::class, 'storeSecond']);
