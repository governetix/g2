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

    Route::resource('settings', \Modules\GCore\Http\Controllers\Admin\GCoreSettingsController::class)->except(['show']);

    Route::resource('feature-flags', \Modules\GCore\Http\Controllers\Admin\FeatureFlagController::class);
    Route::resource('style/theme', \Modules\GCore\Http\Controllers\Admin\CssThemeController::class)->names('css-themes');
    Route::get('style/visual', [\Modules\GCore\Http\Controllers\Admin\GCoreSettingsController::class, 'visual'])->name('style.visual');
    Route::get('style/format', [\Modules\GCore\Http\Controllers\Admin\GCoreSettingsController::class, 'format'])->name('style.format');
    Route::get('style/form', [\Modules\GCore\Http\Controllers\Admin\GCoreSettingsController::class, 'form'])->name('style.form');
    Route::get('style/table', [\Modules\GCore\Http\Controllers\Admin\GCoreSettingsController::class, 'table'])->name('style.table');
    Route::get('style/charts', [\Modules\GCore\Http\Controllers\Admin\GCoreSettingsController::class, 'charts'])->name('style.charts');
    Route::get('style/maps', [\Modules\GCore\Http\Controllers\Admin\GCoreSettingsController::class, 'maps'])->name('style.maps');
});