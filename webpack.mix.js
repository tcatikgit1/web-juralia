const mix = require('laravel-mix');
require('laravel-mix-purgecss');

const purge_enabled = false; // SI QUIERE QUE EL PURGE CSS SE HAGA EN DESARROLLO
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
    .js('resources/js/layout.js', 'public/js')
    .js('resources/js/jquery-only-ajax.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/layout.scss', 'public/css')
    .sass('resources/sass/bootstrap-lite.scss', 'public/css')
    .purgeCss({
        enabled: purge_enabled,
    }); // Agregar esta línea

mix.copyDirectory('resources/images', 'public/images')
mix.copyDirectory('resources/fonts', 'public/fonts')
mix.copyDirectory('resources/vendor', 'public/vendor')
