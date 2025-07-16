<?php

namespace Modules\GMonitorix\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Modules\GMonitorix\Models\LogEntry;
use Modules\GMonitorix\Models\ErrorEntry;

class MonitorixController extends Controller
{
    public function logs()
    {
        $logs = LogEntry::orderBy('created_at', 'desc')->paginate(20);
        return view('gmonitorix::admin.logs', compact('logs'));
    }

    public function errors()
    {
        $errors = ErrorEntry::orderBy('created_at', 'desc')->paginate(20);
        return view('gmonitorix::admin.errors', compact('errors'));
    }

    public function modules()
    {
        // Esta parte requerirá la integración con el sistema de módulos de Laravel
        // Por ahora, podemos devolver una vista simple.
        $modules = []; // Aquí iría la lógica para obtener los módulos
        return view('gmonitorix::admin.modules', compact('modules'));
    }
}
