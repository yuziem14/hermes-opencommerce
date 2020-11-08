<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/favicon.svg" type="image/svg+xml">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">

    <title>{{env('APP_NAME')}}</title>
  </head>
  <body>
    <div id="root">
      <div id="page-main">
        <aside class="container">
          <img src="/images/logo.svg" alt="Hermes | Logo">
          <section>
            <img src="/images/wordmark.svg" alt="Hermes | Logo">
            <h1>Hermes é o marketplace<span class="breakline"></span>para vender e comprar<span class="breakline"></span>diversos produtos.</h1>
          </section>
        </aside>
        <main>
          <div class="container">
            <img src="/images/hero.svg" alt="Hero Image">
            <div class="actions">
              <a href="/login">
                <p>Entrar</p>
              </a>
              <a href="/register">
                <p>Registrar-se</p>
              </a>
            </div>
          </div>
        </main>
      </div>
    </div>

    <script src="/js/app.js" defer></script>
  </body>
</html>
