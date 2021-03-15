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

mix.js([
    'resources/js/app.js',
    'resources/js/jquery.raty.js',
    'resources/js/zipcode.js',
    'resources/js/address-radio.js',
    'resources/js/category_search.js',
    'resources/js/jquery.autokana.js',
    'resources/js/shipping.js',

  ],
     'public/js')
    .sass('resources/sass/app.scss', 'public/css');
