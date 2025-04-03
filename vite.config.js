import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import postcssConfig from './postcss.config.js';

export default defineConfig({
    server: {
        watch: {
            usePolling: true,
            interval: 300
        }
    },
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
