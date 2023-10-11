<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TopicController;
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
    return view('welcome');
})->name('landing-page');
//
//Route::get('/masuk', function() {
//    return 'halaman masuk';
//})->name('masuk');
//
//Route::get('/daftar', function() {
//    return 'halaman daftar';
//})->name('daftar');
//
//Route::post('/form', [\App\Http\Controllers\FormController::class, 'store'])->name('form');
//Route::get('/form/{id}', [\App\Http\Controllers\FormController::class, 'result'])->name('form_result');
//Route::get('/form',[\App\Http\Controllers\FormController::class, 'index'])->name('form');
//
//// Route::view('/dashboard', 'dashboard.beranda', ['nama' => 'asep']);
//
//Route::get('/dashboard', function() {
//    $nama = 'freder';
//    return view('dashboard.beranda', compact('nama'))
//        ->with('page', 'beranda');
//})->name('dashboard');
//
//Route::get('/dashboard/tugas-akhir', function() {
//    return view('dashboard.tugas-akhir', [
//        'nama' => 'Luthfiyyah',
//        'page' => 'tugas-akhir'
//    ]);
//})->name('tugas-akhir');
//
//Route::get('/dashboard/penawaran-topik', [TopicController::class, 'show'])->name('penawaran-topik');
//Route::get('/dashboard/penawaran-topik/tambah', [TopicController::class, 'showForm'])->name('tambah-penawaran-topik');
////Route::middleware(\App\Http\Middleware\ValidateSpecialInput::class)->
//Route::middleware(['special'])->
//put('/dashboard/penawaran-topik/tambah', [TopicController::class, 'simpan'])->name('tambah-penawaran-topik');
//
//Route::get('/dashboard/penawaran-topik/tambah-peserta', [TopicController::class, 'showformpeserta'])->name('tambah-peserta-topik');
//Route::put('/dashboard/penawaran-topik/tambah-peserta', [TopicController::class, 'storepesertatopik'])->name('tambah-peserta-topik');
//
//Route::prefix('contoh')->name('contoh.')->group(function () {
//    Route::get('', function () {
//        return redirect()->route('bukan_contoh.anak2');
//    });
//    Route::get('dengan_parameter/{id}', [\App\Http\Controllers\ContohController::class, 'url1parameter']);
//    Route::get('dengan_parameter/{id}/{sub}', [\App\Http\Controllers\ContohController::class, 'url2parameter']);
//    Route::middleware('web')->get('/anak', function () {
//        echo 'ini anak';
//    })->name('anak');
//    Route::get('/anak2', function () {
//        echo 'ini anak 2';
//    })->name('anak2');
//});
//
//Route::prefix('photo')->group(function (){
//    Route::
//        //create
//        //dedit
//})

//Route::resource('photos', \App\Http\Controllers\PhotoController::class);

Route::get('/dashboard', function (\Illuminate\Http\Request $request) {
    dd($request->user()->name);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
