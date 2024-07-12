<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UnitKerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fruits',  [FruitController::class, 'index'])->name('fruits.index');
Route::post('/fruits',  [FruitController::class, 'create'])->name('fruits.create');
// tanda /'ini adalah buat nyari folder nya ada dimana



Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Hai, Feri Ardiansyah";
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin.index');

Route::get('/about', function () {
    return view('about');
});

Route::prefix('pasien')->middleware('auth')->name('pasien.')->controller(PasienController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{pasien}', 'show')->name('show');
    Route::get('/{pasien}/edit', 'edit')->name('edit');
    Route::patch('/{pasien}', 'update')->name('update');
    Route::delete('/{pasien}', 'destroy')->name('destroy');
});

Route::prefix('paramedik')->middleware('auth')->name('paramedik.')->controller(ParamedikController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{pasien}', 'show')->name('show');
    Route::get('/{pasien}/edit', 'edit')->name('edit');
    Route::patch('/{pasien}', 'update')->name('update');
    Route::delete('/{pasien}', 'destroy')->name('destroy');
});

Route::prefix('periksa')->middleware('auth')->name('periksa.')->controller(PeriksaController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{pasien}', 'show')->name('show');
    Route::get('/{pasien}/edit', 'edit')->name('edit');
    Route::patch('/{pasien}', 'update')->name('update');
    Route::delete('/{pasien}', 'destroy')->name('destroy');
});

Route::prefix('unit_kerja')->middleware('auth')->name('unit_kerja.')->controller(UnitKerjaController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{pasien}', 'show')->name('show');
    Route::get('/{pasien}/edit', 'edit')->name('edit');
    Route::patch('/{pasien}', 'update')->name('update');
    Route::delete('/{pasien}', 'destroy')->name('destroy');
});

Route::prefix('kelurahan')->middleware('auth')->name('kelurahan.')->controller(KelurahanController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{pasien}', 'show')->name('show');
    Route::get('/{pasien}/edit', 'edit')->name('edit');
    Route::patch('/{pasien}', 'update')->name('update');
    Route::delete('/{pasien}', 'destroy')->name('destroy');
});
// Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
// Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
// Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');
// Route::get('/pasien/{pasien}', [PasienController::class, 'show'])->name('pasien.show');
// Route::get('/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
// Route::patch('/pasien/{pasien}', [PasienController::class, 'update'])->name('pasien.update');
// Route::delete('/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasien.destroy');

// Route::get('/paramedik', [ParamedikController::class, 'index'])->name('paramedik.index');
// Route::get('/paramedik/create', [ParamedikController::class, 'create'])->name('paramedik.create');
// Route::post('/paramedik', [ParamedikController::class, 'store'])->name('paramedik.store');
// Route::get('/paramedik/{paramedik}', [ParamedikController::class, 'show'])->name('paramedik.show');
// Route::get('/paramedik/{paramedik}/edit', [ParamedikController::class, 'edit'])->name('paramedik.edit');
// Route::patch('/paramedik/{paramedik}', [ParamedikController::class, 'update'])->name('paramedik.update');
// Route::delete('/paramedik/{paramedik}', [ParamedikController::class, 'destroy'])->name('paramedik.destroy');

// Route::get('/periksa', [PeriksaController::class, 'index'])->name('periksa.index');
// Route::get('/periksa/create', [PeriksaController::class, 'create'])->name('periksa.create');
// Route::post('/periksa', [PeriksaController::class, 'store'])->name('periksa.store');
// Route::get('/periksa/{periksa}', [PeriksaController::class, 'show'])->name('periksa.show');
// Route::get('/periksa/{periksa}/edit', [PeriksaController::class, 'edit'])->name('periksa.edit');
// Route::patch('/periksa/{periksa}', [PeriksaController::class, 'update'])->name('periksa.update');
// Route::delete('/periksa/{periksa}', [PeriksaController::class, 'destroy'])->name('periksa.destroy');

// Route::get('/unit_kerja', [UnitKerjaController::class, 'index'])->name('unit_kerja.index');
// Route::get('/unit_kerja/create', [UnitKerjaController::class, 'create'])->name('unit_kerja.create');
// Route::post('/unit_kerja', [UnitKerjaController::class, 'store'])->name('unit_kerja.store');
// Route::get('/unit_kerja/{unit_kerja}', [UnitKerjaController::class, 'show'])->name('unit_kerja.show');
// Route::get('/unit_kerja/{unit_kerja}/edit', [UnitKerjaController::class, 'edit'])->name('unit_kerja.edit');
// Route::patch('/unit_kerja/{unit_kerja}', [UnitKerjaController::class, 'update'])->name('unit_kerja.update');
// Route::delete('/unit_kerja/{unit_kerja}', [UnitKerjaController::class, 'destroy'])->name('unit_kerja.destroy');

// Route::get('/kelurahan', [KelurahanController::class, 'index'])->name('kelurahan.index');
// Route::get('/kelurahan/create', [KelurahanController::class, 'create'])->name('kelurahan.create');
// Route::post('/kelurahan', [KelurahanController::class, 'store'])->name('kelurahan.store');
// Route::get('/kelurahan/{kelurahan}', [KelurahanController::class, 'show'])->name('kelurahan.show');
// Route::get('/kelurahan/{kelurahan}/edit', [KelurahanController::class, 'edit'])->name('kelurahan.edit');
// Route::patch('/kelurahan/{kelurahan}', [KelurahanController::class, 'update'])->name('kelurahan.update');
// Route::delete('/kelurahan/{kelurahan}', [KelurahanController::class, 'destroy'])->name('kelurahan.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
