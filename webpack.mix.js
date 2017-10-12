let mix = require('laravel-mix');

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
mix.sass('resources/assets/sass/app.scss', 'public/css');

// Mix Java Script
mix.scripts([
  //   'resources/assets/js/frameworks/',
  'resources/assets/js/frameworks/jquery.min.js',
  'resources/assets/js/frameworks/bootstrap.min.js',

  'resources/assets/js/frameworks/material.min.js',

  'resources/assets/js/frameworks/nouislider.min.js',
  'resources/assets/js/frameworks/bootstrap-datepicker.js',
  'resources/assets/js/frameworks/material-kit.js',
  'resources/assets/js/layouts/text.js',
], 'public/js/app.js');
