<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\hController;
Route::get('/',[hController::class,'i']);
?>