<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\EmployeeController;





Route::post('/register',  [UserAuthController::class, 'register']);
Route::post('/login', [UserAuthController::class, 'login']);


Route::apiResource('employee', EmployeeController::class)->middleware('auth:api');
