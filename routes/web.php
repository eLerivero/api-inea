<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimuladorController;

Route::get('/', function () {
    return view('simulador.index');
});

//Route::get('/simulador', [SimuladorController::class, 'index']);
