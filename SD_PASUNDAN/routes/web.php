<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// HOME
Route::get('/', function () {
    return view('main');
});



// PROFILE
// VIEWS
Route::get('/v_profile_siswa', function () {
    return view('v_profile_siswa');
});

Route::get('/v_profile_guru', function () {
    return view('v_profile_guru');
});

// EDIT
Route::get('/e_profile_siswa', function () {
    return view('e_profile_siswa');
});

Route::get('/e_profile_guru', function () {
    return view('e_profile_guru');
});



// RAPORT
// VIEWS (SISWA)
Route::get('/v_raport', function () {
    return view('v_raport');
});

// EDIT (GURU)
Route::get('/e_raport', function () {
    return view('e_raport');
});
