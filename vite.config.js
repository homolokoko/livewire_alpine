import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                'resources/css/flatpickr.css',

                'resources/js/dropzone/dropzone.js',
                'resources/css/dropzone/dropzone.css',

                'resources/js/toastify/app.js',
                'resources/css/toastify/app.css',
            ],
            refresh: false,
        }),
    ],
});
