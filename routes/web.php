<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainTrain;

Route::get('/', [MainTrain::class, 'index']);
