<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin/core')->name('admin.core.')->group(function() {
    Route::get('/', function() {
        return view('gcore::index');
    })->name('welcome');
});
