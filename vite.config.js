import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',                
                'resources/assets/css/style.css',
                'resources/js/app.js',                
                'resources/assets/slick/slick.min.js',
            ],
            refresh: true,
        }),
    ],
});
