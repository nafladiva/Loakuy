const mix = require('laravel-mix');

/*
   |--------------------------------------------------------------------------
   | Mix Asset Management
   |--------------------------------------------------------------------------
   |
   | Mix provides a clean, fluent API for defining some Webpack build steps
   | for your Laravel application. By default, we are compiling the Sass
   | file for the application as well as bundling up all the JS files.
   |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
        'node_modules/bootstrap/dist/js/bootstrap.js',
        'node_modules/aos/dist/aos.js'
    ], 'public/js/app.js')

    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'node_modules/aos/dist/aos.css',
        'resources/assets/css/app.css'
    ], 'public/css/app.css');
