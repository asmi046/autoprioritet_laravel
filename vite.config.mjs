import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'public/fonts/icons/style.css',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/cart.js',
                'public/scss/main.scss'
            ],
            refresh: true,
        }),
    ],
});
