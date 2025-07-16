<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin/core')->name('admin.core.')->group(function() {
    Route::get('/', function() {
        return view('gcore::index');
    })->name('welcome');

    Route::get('/test-exception', function () {
        throw new Modules\GCore\Exceptions\ResourceNotFoundException('Mi recurso no fue encontrado.');
    })->name('test-exception');

    Route::resource('translations', \Modules\GCore\Http\Controllers\Admin\TranslationController::class);
});