import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: false, // Se mantiene en false para evitar refrescos de página completos
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            // Ignorar la carpeta de vistas compiladas de Laravel para evitar bucles de refresco.
            // Esto es crucial para entornos como Windows donde las operaciones de archivo pueden ser sensibles.
            ignored: ['**/storage/framework/views/**'],
        },
    },
});