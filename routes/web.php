<?php

use App\Http\Controllers\Users\GitHub\ListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;

// Page Route
// Route::get('/', [PageController::class, 'blankPage'])->middleware('verified');

Route::middleware(['auth'])->group(function() {
    Route::prefix('users')->name('users.')->group(function() {
        Route::prefix('git-hub')->name('git-hub.')->group(function () {
            Route::get('/')->name('list')->uses(ListController::class);
        });
    });

    ### TEMPLATE ###
    Route::get('/', [PageController::class, 'blankPage']);
    Route::get('/page-blank', [PageController::class, 'blankPage']);
    Route::get('/page-collapse', [PageController::class, 'collapsePage']);
});

// locale route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Auth::routes(['verify' => true]);
