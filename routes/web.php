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
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'tests'], function () {
    Route::get('/', function () {
        return view('tests.index');
    });
    Route::get('/form', function () {
        return view('tests.form');
    })->name('tests.form');
    Route::get('/nav', function () {
        return view('tests.nav');
    })->name('tests.nav'); 
    Route::get('/nav-2', function () {
        return view('tests.nav-2');
    })->name('tests.nav-2');
    Route::get('/nav-3', function () {
        return view('tests.nav-3');
    })->name('tests.nav-3');
    Route::get('/nav-4', function () {
        return view('tests.nav-4');
    })->name('tests.nav-4');
});

Route::get('/getdata',  [MainController::class, 'getData']);
