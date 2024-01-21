import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/fonts/icons/style.css',
                'resources/css/app.css',
                'resources/js/app.js',
                'public/scss/main.scss'
            ],
            refresh: true,
        }),
    ],
});
