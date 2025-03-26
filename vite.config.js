import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: 'localhost',
        port: 5173, // Debe ser 5173, no 8000 (8000 es el puerto de Laravel, no de Vite)
    },
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'], // Asegurar rutas correctas
            refresh: true,
        }),
    ],
});