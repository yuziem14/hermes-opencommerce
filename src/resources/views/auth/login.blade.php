@extends('layouts.master')

@section('styles')
  <link rel="stylesheet" href="/css/login.css">
@endsection

@section('content')
  <div id="page-login">
    <header class="container">
      <a href="{{ route('index') }}">
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
        <form class="container" action="{{ route('login.store') }}" method="POST">
        <fieldset>
          <header>
            <legend>Login no Hermes</legend>
            @if(session('invalidCredentials'))
              <p class="error-message">{{ session('invalidCredentials') }}</p>
            @endif
          </header>
          @csrf
          <div>
            <div class="input-group">
              <label for="email">E-mail</label>
              <input
                type="email"
                id="email"
                name="email"
                value="{{ session('providedEmail') }}"
                required
              >
            </div>
            <div class="input-group">
              <label for="password">Senha</label>
              <input
                type="password"
                id="password"
                name="password"
                required
              >
            </div>
          </div>
        </fieldset>
        <button type="submit">
          <p>Entrar</p>
        </button>
      </form>
      <footer class="container">
        <p>Não tem uma conta? <a href="{{ route('register.index') }}">Registre-se</a></p>
      </footer>
    </main>
  </div>
@endsection
