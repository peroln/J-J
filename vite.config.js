import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/video.scss',
                'resources/js/app.js',
                'resources/js/form-validation.js',
            ],
            refresh: true,
        }),
    ],
});
