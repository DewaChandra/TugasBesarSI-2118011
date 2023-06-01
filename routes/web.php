<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PengajuanizinController;
use App\Http\Controllers\PengajuanizinsController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TunjanganController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
    return view('dashboard');
});

Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');
Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::put('/karyawan/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
Route::get('/karyawan/export', [KaryawanController::class, 'exportpdf'])->name('karyawan.exportpdf');

Route::get('/gaji', [GajiController::class, 'index'])->name('gaji.index');
Route::get('/gaji/create', [GajiController::class, 'create'])->name('gaji.create');
Route::post('/gaji', [GajiController::class, 'store'])->name('gaji.store');
Route::get('/gaji/{id}/edit', [GajiController::class, 'edit'])->name('gaji.edit');
Route::put('/gaji/{id}', [GajiController::class, 'update'])->name('gaji.update');
Route::delete('/gaji/{id}', [GajiController::class, 'destroy'])->name('gaji.destroy');
Route::get('/gaji/export', [GajiController::class, 'exportpdf'])->name('gaji.exportpdf');

Route::get('/tunjangan', [TunjanganController::class, 'index'])->name('tunjangan.index');
Route::get('/tunjangan/create', [TunjanganController::class, 'create'])->name('tunjangan.create');
Route::post('/tunjangan', [TunjanganController::class, 'store'])->name('tunjangan.store');
Route::get('/tunjangan/{id}/edit', [TunjanganController::class, 'edit'])->name('tunjangan.edit');
Route::put('/tunjangan/{id}', [TunjanganController::class, 'update'])->name('tunjangan.update');
Route::delete('/tunjangan/{id}', [TunjanganController::class, 'destroy'])->name('tunjangan.destroy');
Route::get('/tunjangan/export', [TunjanganController::class, 'exportpdf'])->name('tunjangan.exportpdf');

Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');
Route::get('/absensi/create', [AbsensiController::class, 'create'])->name('absensi.create');
Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi.store');
Route::get('/absensi/{id}/edit', [AbsensiController::class, 'edit'])->name('absensi.edit');
Route::put('/absensi/{id}', [AbsensiController::class, 'update'])->name('absensi.update');
Route::delete('/absensi/{id}', [AbsensiController::class, 'destroy'])->name('absensi.destroy');
Route::get('/absensi/export', [AbsensiController::class, 'exportpdf'])->name('absensi.exportpdf');

Route::get('/perizinan', [PerizinanController::class, 'index'])->name('perizinan.index');
Route::get('/perizinan/create', [PerizinanController::class, 'create'])->name('perizinan.create');
Route::post('/perizinan', [PerizinanController::class, 'store'])->name('perizinan.store');
Route::get('/perizinan/{id}/edit', [PerizinanController::class, 'edit'])->name('perizinan.edit');
Route::put('/perizinan/{id}', [PerizinanController::class, 'update'])->name('perizinan.update');
Route::delete('/perizinan/{id}', [PerizinanController::class, 'destroy'])->name('perizinan.destroy');
Route::get('/perizinan/export', [PerizinanController::class, 'exportpdf'])->name('perizinan.exportpdf');

Route::get('/pengajuanizin', [PengajuanizinController::class, 'index'])->name('pengajuanizin.index');
Route::get('/pengajuanizin/create', [PengajuanizinController::class, 'create'])->name('pengajuanizin.create');
Route::post('/pengajuanizin', [PengajuanizinController::class, 'store'])->name('pengajuanizin.store');
Route::get('/pengajuanizin/{id}/edit', [PengajuanizinController::class, 'edit'])->name('pengajuanizin.edit');
Route::put('/pengajuanizin/{id}', [PengajuanizinController::class, 'update'])->name('pengajuanizin.update');
Route::delete('/pengajuanizin/{id}', [PengajuanizinController::class, 'destroy'])->name('pengajuanizin.destroy');
Route::get('/pengajuanizin/export', [PengajuanizinController::class, 'exportpdf'])->name('pengajuanizin.exportpdf');

Route::get('/training', [TrainingController::class, 'index'])->name('training.index');
Route::get('/training/create', [TrainingController::class, 'create'])->name('training.create');
Route::post('/training', [TrainingController::class, 'store'])->name('training.store');
Route::get('/training/{id}/edit', [TrainingController::class, 'edit'])->name('training.edit');
Route::put('/training/{id}', [TrainingController::class, 'update'])->name('training.update');
Route::delete('/training/{id}', [TrainingController::class, 'destroy'])->name('training.destroy');
Route::get('/training/export', [TrainingController::class, 'exportpdf'])->name('training.exportpdf');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user/export', [UserController::class, 'exportpdf'])->name('user.exportpdf');