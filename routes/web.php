<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CobrancaController;



Route::resource('/cobranca', [CobrancaController::class, 'index']);
