@extends('layouts.master')

@section('styles')
  <link rel="stylesheet" href="/css/login.css">
@endsection

@section('content')
  <div id="page-login">
    <header class="container">
      <a href="/">
        <img src="/images/arrow.svg" alt="Go Back">
      </a>
    </header>
    <aside class="container">
      <div>
        <img src="/images/logo.svg" alt="Hermes | Logo" />
        <img src="/images/wordmark.svg" alt="Hermes | Wordmark" />
      </div>
    </aside>
    <main>
      <header class="container">
        <h1>Bem vindo de volta!</h1>
        <h3>Estamos felizes em <span class="breakline"></span>te ver por aqui.</h3>
      </header>
      <form class="container">
        <fieldset>
          <legend>Login no Hermes</legend>
          <div>
            <div class="input-group">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
              <label for="password">Senha</label>
              <input type="password" id="password" name="password" required>
            </div>
          </div>
        </fieldset>
        <button type="submit">
          <p>Entrar</p>
        </button>
      </form>
      <footer class="container">
        <p>Não tem uma conta? <a href="/register">Registre-se</a></p>
      </footer>
    </main>
  </div>
@endsection
