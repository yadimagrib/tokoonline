<?php

use App\Livewire\ProducrDetails;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/producr/details', ProducrDetails::class);
