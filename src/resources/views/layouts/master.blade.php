<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="##7225d0">
    <meta name="description" content="Hermes is the marketplace to buy and sell a variety of products.">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/images/favicon.svg">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    @yield('styles')

    <title>{{env('APP_NAME')}}</title>
  </head>
  <body>
    <div id="root">
      @yield('content')
    </div>

    <script src="/js/app.js" defer></script>
    @yield('scripts')
  </body>
</html>
