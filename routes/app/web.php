<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::group(['domain' => ''], function() {
    Route::name('web.')->group(function(){
        Route::get('', [WebController::class, 'index'])->name('home');
        Route::get('map', [WebController::class, 'map'])->name('home.map');
        Route::get('progress', [WebController::class, 'progress'])->name('home.progress');
        Route::get('tentang', [WebController::class, 'about'])->name('about');
    });
});