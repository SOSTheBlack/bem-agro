<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Users\GitHub\ListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

Route::middleware(['auth'])->group(function() {
    Route::get('/')->uses(DashboardController::class);

    Route::prefix('users')->name('users.')->group(function() {
        Route::prefix('git-hub')->name('git-hub.')->group(function () {
            Route::get('/')->name('list')->uses(ListController::class);
        });
    });
});

// locale route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Auth::routes(['verify' => true]);
