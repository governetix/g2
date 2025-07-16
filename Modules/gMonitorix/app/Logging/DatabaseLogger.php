<?php

namespace Modules\GMonitorix\Logging;

use Monolog\Logger;
use Modules\GMonitorix\Models\LogEntry;

class DatabaseLogger
{
    public function __invoke(array $config): Logger
    {
        $logger = new Logger('database');
        $logger->pushHandler(new DatabaseHandler($config['level']));

        return $logger;
    }
}
