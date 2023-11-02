<?php

use App\Models\Resep;
use App\Models\Apoteker;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResepController;

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

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login/action', [
        AuthController::class, 'loginAction'
    ])->name('login.action');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::post('/register/action', [
        AuthController::class, 'registerAction'
    ])->name('register.action');

    Route::get('/logout', [
        AuthController::class, 'logout'
    ])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/staff/dashboard', function () {
            return view('staff.dashboard');
        })->name('staff.dashboard');

        Route::get('/staff/Apoteker', function () {
            return view('staff.apoteker', [
                'apoteker' => Apoteker::all(),
            ]);
        })->name('staff.apoteker');

        Route::get('/staff/resep', function () {
            return view('staff.resep', [
                'resep' => Resep::all()
            ]);
        })->name('staff.resep');

        Route::get('/staff/pesan', function () {
            return view('staff.pesan');
        })->name('staff.pesan');

        Route::controller(ResepController::class)->group(function () {
            Route::get('/staff/resep/tambah', 'tambah')->name('staff.add');
            Route::post('/staff/resep/tambah/action', 'store')->name('staff.store');
            Route::get('/staff/resep/edit/{id}', 'edit')->name('staff.edit');
            Route::post('/staff/resep/edit/{id}/action', 'update')->name('staff.update');
            Route::post('/staff/resep/delete/{id}/action', 'delete')->name('staff.delete');
        });
    });
