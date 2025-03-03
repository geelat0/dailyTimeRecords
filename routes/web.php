<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddTimeEntryController;


Route::get('/', function () {
    return view('components.app');
});

Route::get('/add-time-entry', [AddTimeEntryController::class, 'index']);
