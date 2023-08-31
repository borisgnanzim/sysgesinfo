import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                    // ajout  28-07-2023 11h42
                'resources/assets/img/favicon.png',
                'resources/assets/img/apple-touch-icon.png',
                'resources/assets/js/main.js',
                'resources/assets/vendor/bootstrap/css/bootstrap.min.css',
                //
                'resources/assets/vendor/bootstrap-icons/bootstrap-icons.css',
                'resources/assets/vendor/boxicons/css/boxicons.min.css',
                'resources/assets/vendor/quill/quill.snow.css',
                'resources/assets/vendor/quill/quill.bubble.css',
                'resources/assets/vendor/remixicon/remixicon.css',
                'resources/assets/css/style.css',
                'resources/assets/vendor/simple-datatables/style.css',
                //
                'resources/assets/vendor/apexcharts/apexcharts.min.js',
                'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
                'resources/assets/vendor/chart.js/chart.umd.js',
                'resources/assets/vendor/echarts/echarts.min.js',
                'resources/assets/vendor/quill/quill.min.js',
                'resources/assets/vendor/simple-datatables/simple-datatables.js',
                'resources/assets/vendor/tinymce/tinymce.min.js',
                'resources/assets/vendor/php-email-form/validate.js',
                //
                //Favicons 
                'resources/assets/img/favicon.png', 
                'resources/assets/img/apple-touch-icon.png', 
                 // Vendor CSS Files
                'resources/assets/vendor/boxicons/css/boxicons.min.css', 
                'resources/assets/vendor/boxicons/css/boxicons.min.css', 
                'resources/assets/vendor/quill/quill.snow.css', 
                'resources/assets/vendor/quill/quill.bubble.css', 
                'resources/assets/vendor/remixicon/remixicon.css', 
                'resources/assets/vendor/simple-datatables/style.css',
                //
                'resources/assets/img/logo.png',

                
            ],
            refresh: true,
        }),
    ],
});
