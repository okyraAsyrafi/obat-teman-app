<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.landing');
});

// routes/web.php
Route::get('/edukasi/mengenal-gejala-tb', fn() => view('landing.mengenal-gejala-tb'));
Route::get('/edukasi/pentingnya-minum-obat', fn() => view('landing.pentingnya-minum-obat'));
Route::get('/edukasi/bernafas-lega-acbt', fn() => view('landing.bernafas-lega-acbt'));
