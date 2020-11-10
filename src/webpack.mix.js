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
  .js('resources/js/fileHandler.js', 'public/js')
  .js('resources/js/multipleFileHandler.js', 'public/js')
  .js('resources/js/tagSelector.js', 'public/js');

mix.styles([
  'resources/css/globals/animations.css',
  'resources/css/globals/app.css'
  ], 'public/css/app.css')
  .styles([
    'resources/css/partials/navbar.css',
    'resources/css/partials/topbar.css',
    'resources/css/partials/pagination.css',
    'resources/css/partials/aside-content.css',
    'resources/css/partials/product-form.css',
  ], 'public/css/partials.css')
  .styles('resources/css/components/product.css', 'public/css/product.css')
  .styles('resources/css/main.css', 'public/css/main.css')
  .styles('resources/css/login.css', 'public/css/login.css')
  .styles('resources/css/register.css', 'public/css/register.css')
  .styles('resources/css/home.css', 'public/css/home.css')
  .styles('resources/css/products-page.css', 'public/css/products-page.css')
  .styles('resources/css/create-product.css', 'public/css/create-product.css');

mix.copyDirectory('resources/images', 'public/images');
