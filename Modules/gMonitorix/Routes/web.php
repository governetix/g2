<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin/monitor')->name('admin.monitor.')->group(function() {
    Route::get('/logs', [\Modules\GMonitorix\Http\Controllers\Admin\MonitorixController::class, 'logs'])->name('logs');
    Route::get('/errors', [\Modules\GMonitorix\Http\Controllers\Admin\MonitorixController::class, 'errors'])->name('errors');
    Route::get('/modules', [\Modules\GMonitorix\Http\Controllers\Admin\MonitorixController::class, 'modules'])->name('modules');
});
