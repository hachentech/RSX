<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;

Route::get('/', function () {
    return view('home');  
})->name('home');


Route::resource('employes', EmployeController::class);

use App\Http\Controllers\ClientController;

Route::resource('clients', ClientController::class);
use App\Http\Controllers\DocumentController;

Route::resource('documents', DocumentController::class);
