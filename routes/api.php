<?php
use App\Http\Controllers\AnimalsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/animal', function () {
    echo"AIKO LOL";
});


Route::get('/animal', [AnimalsController::class, 'index']);
Route::post('/animal', [AnimalsController::class, 'store']);
Route::put('/animal/{id}', [AnimalsController::class, 'update']);
Route::delete('/animal/{id}', [AnimalsController::class, 'destroy']);