<?php

namespace Modules\GBackup\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class BackupFileCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gbackup:file {pathToFile}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea una copia de seguridad de un archivo específico.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $pathToFile = $this->argument('pathToFile');

        if (! File::exists($pathToFile)) {
            $this->error("El archivo no existe: {$pathToFile}");
            return Command::FAILURE;
        }

        $backupPath = config('gbackup.backup_path');

        if (! File::isDirectory($backupPath)) {
            File::makeDirectory($backupPath, 0777, true, true);
        }

        $fileName = pathinfo($pathToFile, PATHINFO_BASENAME);
        $timestamp = now()->format('dmy-His');
        $backupFileName = "{$timestamp}_{$fileName}";
        $destinationPath = "{$backupPath}/{$backupFileName}";

        try {
            File::copy($pathToFile, $destinationPath);
            $this->info("Copia de seguridad creada exitosamente en: {$destinationPath}");
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->error("Error al crear la copia de seguridad: {$e->getMessage()}");
            return Command::FAILURE;
        }
    }
}
