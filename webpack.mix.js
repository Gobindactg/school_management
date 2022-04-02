const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */


//  frontend
mix.js('resources/Frontend/js/app.js', 'public/Frontend/js')
    .sass('resources/Frontend/sass/styles.scss', 'public/Frontend/css');

//  backend
mix.js('resources/Backend/js/app.js', 'public/Backend/js')
    .sass('resources/Backend/sass/styles.scss', 'public/Backend/css');
