<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/contoh', function (){
   echo 'jalan di api.php';
});
Route::post('/contoh', function (){
    echo 'jalan di api.php';
});
Route::patch('/contoh', function (){
    echo 'jalan di api.php';
});
Route::delete('/contoh', function (){
    echo 'jalan di api.php';
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

foreach (scandir($path = app_path('Http/')) as $dir) {
    if (file_exists($filepath = "{$path}/{$dir}/Presentation/api.php")) {
        require $filepath;
    }
}
