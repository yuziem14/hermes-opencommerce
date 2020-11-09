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

mix.js('resources/js/app.js', 'public/js')
  .js('resources/js/fileHandler.js', 'public/js');

mix.styles('resources/css/globals/app.css', 'public/css/app.css')
  .styles('resources/css/main.css', 'public/css/main.css')
  .styles('resources/css/login.css', 'public/css/login.css')
  .styles('resources/css/register.css', 'public/css/register.css');

mix.copyDirectory('resources/images', 'public/images');
