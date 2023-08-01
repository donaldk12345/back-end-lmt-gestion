<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ForgotController;
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





Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {

    Route::get('user', [\App\Http\Controllers\AuthController::class, 'user']);
    Route::get('users', [\App\Http\Controllers\AuthController::class, 'index']);
    Route::post('roles', [\App\Http\Controllers\RoleController::class, 'store']);
    Route::get('roles', [\App\Http\Controllers\RoleController::class, 'index']);
    Route::put('roles/{id}', [\App\Http\Controllers\RoleController::class, 'update']);
    Route::delete('roles/{id}', [\App\Http\Controllers\RoleController::class, 'destroy']);
    Route::get('users', [\App\Http\Controllers\AuthController::class, 'index']);
    Route::post('roles', [\App\Http\Controllers\RoleController::class, 'store']);
    Route::post('categories', [\App\Http\Controllers\CategoryController::class, 'store']);
    Route::get('categories', [\App\Http\Controllers\CategoryController::class, 'index']);
    Route::post('contacts', [\App\Http\Controllers\ContactController::class, 'store']);
    Route::get('contacts', [\App\Http\Controllers\ContactController::class, 'index']);
    Route::post('comptes', [\App\Http\Controllers\CompteController::class, 'store']);
    Route::get('comptes', [\App\Http\Controllers\CompteController::class, 'index']);
    Route::post('credits', [\App\Http\Controllers\CreditController::class, 'store']);
    Route::get('credits', [\App\Http\Controllers\CreditController::class, 'index']);
});
