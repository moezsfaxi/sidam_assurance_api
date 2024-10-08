<?php

use App\Http\Controllers\AssuranceAutoController;
use App\Http\Controllers\AssuranceRisqueAgricoleController;
use App\Http\Controllers\AssuranceSanteController;
use App\Http\Controllers\AssuranceTousRisquesChantiersController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AssuranceTransportController;
use App\Http\Controllers\AssuranceVoyageController;
use App\Http\Controllers\ReclamationClientController;
use App\Http\Controllers\AssuranceIndividuelleAccidentsController;
use App\Http\Controllers\AssuranceMultirisqueHabitationController;
use App\Http\Controllers\AssuranceMultirisqueProfessionnelleController;
use App\Http\Controllers\MesPolicesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/assurance-auto',AssuranceAutoController::class);

Route::apiResource('/assurance-individuelle-accidents', AssuranceIndividuelleAccidentsController::class);
Route::apiResource('/assurance-multirisque-habitation', AssuranceMultirisqueHabitationController ::class);
Route::apiResource('/assurance-multirisque-pro', AssuranceMultirisqueProfessionnelleController::class);
Route::apiResource('/assurance-risque-agricole', AssuranceRisqueAgricoleController::class);
Route::apiResource('/assurance-sante', AssuranceSanteController::class);
Route::apiResource('/assurance-tousrisques-chantiers', AssuranceTousRisquesChantiersController::class);
Route::apiResource('/assurance-transport', AssuranceTransportController::class);
Route::apiResource('/assurance-voyage', AssuranceVoyageController::class);
Route::apiResource('/reclamation-client', ReclamationClientController::class);
Route::apiResource('/users', UsersController::class);
Route::get('/users/{email}/specific-columns', [UsersController::class, 'specificColumns']);
Route::get('/assurance/{email}/all-the-active-police', [MesPolicesController::class, 'getmealltheassurances']);





