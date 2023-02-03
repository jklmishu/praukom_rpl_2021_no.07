<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\JurusanKelasController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LeveluserController;
use App\Http\Controllers\WalikelasController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('/dashboard')->group(function () {
    Route::get('/', fn () => view('dashboard.index'));
    Route::get('/jurusan-dan-kelas', JurusanKelasController::class)->name('jurusan.kelas.index');

    Route::prefix('/jurusan')->controller(JurusanController::class)->group(function () {
        Route::get('/tambah', 'create')->name('jurusan.create');
        Route::post('/', 'store')->name('jurusan.store');
        Route::get('/{jurusan}/edit', 'edit')->name('jurusan.edit');
        Route::put('/{jurusan}', 'update')->name('jurusan.update');
        Route::delete('/{jurusan}', 'destroy')->name('jurusan.delete');
    });

    Route::prefix('/kelas')->controller(KelasController::class)->group(function () {
        Route::get('/tambah', 'create')->name('kelas.create');
        Route::post('/', 'store')->name('kelas.store');
        Route::get('/{kelas}/edit', 'edit')->name('kelas.edit');
        Route::put('/{kelas}', 'update')->name('kelas.update');
        Route::delete('/{kelas}', 'destroy')->name('kelas.delete');
    });
    Route::prefix('/leveluser')->controller(LeveluserController::class)->group(function () {
        Route::get('/', 'index')->name('leveluser.index');
        Route::get('/tambah', 'tambahleveluser')->name('tambahleveluser');
        Route::post('/', 'store')->name('leveluser.store');
        Route::get('/{leveluser}/edit', 'edit')->name('leveluser.edit');
        Route::put('/{leveluser}', 'update')->name('leveluser.update');
        Route::delete('/{leveluser}', 'destroy')->name('leveluser.delete');
    });

    Route::prefix('/walikelas')->controller(WalikelasController::class)->group(function () {
        Route::get('/', 'index')->name('walikelas.index');
        Route::get('/tambah', 'create')->name('walikelas.create');
        Route::post('/', 'store')->name('walikelas.store');
        Route::get('/{walikelas}/edit', 'edit')->name('walikelas.edit');
        Route::put('/{walikelas}', 'update')->name('walikelas.update');
        Route::delete('/{walikelas}', 'destroy')->name('walikelas.delete');
    });
    
    Route::get('/tambahleveluser', [LeveluserController::class, 'tambahleveluser'])->name('tambahleveluser');
    Route::post('/insertleveluser', [LeveluserController::class, 'insertleveluser'])->name('insertleveluser');
    Route::get('/tampilkanleveluser/{id}', [LeveluserController::class, 'tampilleveluser'])->name('tampilkanleveluser');
    Route::post('/updateleveluser/{id}', [LeveluserController::class, 'updateleveluser'])->name('updateleveluser');
    

    Route::get('/tambahwalikelas', [WalikelasController::class, 'tambahwalikelas'])->name('tambahwalikelas');
    Route::post('/insertdata', [WalikelasController::class, 'insertdata'])->name('insertdata');
});
