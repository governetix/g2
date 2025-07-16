@echo off
cls

REM --- Mueve la terminal a la carpeta donde esta el script ---
cd /d "%~dp0"

echo.
echo [INICIO] Limpiando caches de Laravel...
echo ===========================================
echo.

echo [PASO 1] Limpiando caches de la aplicacion, configuracion, rutas y vistas...
php artisan optimize:clear
echo.

echo [PASO 2] Limpiando caches de paquetes compilados...
php artisan clear-compiled
echo.

echo [PASO 3] Limpiando cache de permisos (Spatie)...
php artisan permission:cache-reset
echo.

echo [PASO 4] Regenerando el mapa de clases de Composer...
composer dump-autoload
echo.

echo ===========================================
echo [FIN] Proceso de limpieza completado.
echo.
echo IMPORTANTE: Para el frontend, ejecuta "npm run dev" en una terminal separada.
echo.

pause