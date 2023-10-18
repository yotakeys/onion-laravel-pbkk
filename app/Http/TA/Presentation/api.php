<?php

use App\Http\TA\Presentation\Controller\TopikController;
use Illuminate\Support\Facades\Route;

Route::prefix('topik')->group(function (){
    Route::post('create', [TopikController::class, 'createTopik']);
    Route::post('update', [TopikController::class, 'updateTopik']);
});
