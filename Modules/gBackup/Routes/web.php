<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin/backup')->name('admin.backup.')->group(function() {
    Route::get('/', function() {
        return view('gbackup::index');
    })->name('welcome');
});
