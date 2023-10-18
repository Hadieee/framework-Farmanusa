<?php

use App\Models\Apoteker;
use App\Models\Resep;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
    "apoteker" => Apoteker::all(),
    "resep" => Resep::all()
    ]);
    })->name('index');
