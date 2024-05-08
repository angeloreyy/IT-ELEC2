<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DataController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'viewHome']);
Route::get('/login', [PageController::class, 'viewLogin']);
Route::get('/register', [PageController::class, 'viewRegister']);
Route::post('/register', [DataController::class, 'userRegister']);
Route::post('/login', [DataController::class, 'userLogin']);
