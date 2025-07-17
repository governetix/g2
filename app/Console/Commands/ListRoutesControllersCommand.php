<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use ReflectionClass;

class ListRoutesControllersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gcore:list-routes-controllers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lists all application routes and verifies if their controllers exist.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Listing application routes and verifying controllers...');

        $routes = Route::getRoutes();
        $results = [];

        foreach ($routes as $route) {
            $uri = $route->uri();
            $action = $route->getAction();
            $controllerStatus = 'N/A';

            if (isset($action['uses'])) {
                $uses = $action['uses'];
                if (is_string($uses) && str_contains($uses, '@')) {
                    list($controllerClass, $method) = explode('@', $uses);
                    try {
                        new ReflectionClass($controllerClass);
                        $controllerStatus = 'Exists';
                    } catch (\ReflectionException $e) {
                        $controllerStatus = 'NOT FOUND: ' . $e->getMessage();
                    }
                } elseif (is_string($uses) && class_exists($uses)) {
                    try {
                        new ReflectionClass($uses);
                        $controllerStatus = 'Exists (Invokable)';
                    } catch (\ReflectionException $e) {
                        $controllerStatus = 'NOT FOUND: ' . $e->getMessage();
                    }
                } elseif (is_callable($uses)) {
                    $controllerStatus = 'Closure';
                }
            }

            $results[] = [
                'Method' => implode('|', $route->methods()),
                'URI' => $uri,
                'Name' => $route->getName() ?? 'N/A',
                'Controller Status' => $controllerStatus,
            ];
        }

        if (empty($results)) {
            $this->warn('No routes found.');
        }
        else {
            $this->table(
                ['Method', 'URI', 'Name', 'Controller Status'],
                $results
            );
        }

        $this->info('Route and controller verification complete.');
    }
}
