<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\hController;
Route::get('/',[hController::class,'i']);

Route::get('/about',[hController::class,'about']);

Route::get('/contact',[hController::class,'contact']);

Route::get('/why',[hController::class,'why']);

Route::get('/team',[hController::class,'team']);

Route::get('/tastimonial',[hController::class,'tastimonial']);

?>