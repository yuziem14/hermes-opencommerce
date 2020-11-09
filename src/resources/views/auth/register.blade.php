@extends('layouts.master')

@section('styles')
  <link rel="stylesheet" href="/css/register.css">
@endsection

@section('content')
  <div id="page-register">
    <header>
      <nav>
        <a href="/">
          <img src="/images/arrow.svg" alt="Go Back">
        </a>
        <img src="/images/wordmark.svg" alt="Hermes | Wordmark">
      </nav>
      <div class="container">
        <h1>Criar uma conta</h1>
        <h3>Venha fazer parte do nosso marketplace.</h3>
      </div>
    </header>
    <main class="container">
      <form>
        <div class="input-group">
          <div class="file-selector">
            <img src="/images/camera.svg" alt="Add Photo">
            <input type="file" id="photo">
          </div>
        </div>
        <fieldset class="container">
          <legend>Seus dados</legend>
          <div>
            <div class="input-group">
              <label for="name">Nome</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
              <label for="username">Nome de usuário (Nickname)</label>
              <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
              <label for="password">Senha</label>
              <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
              <label for="password_confirmation">Confirmar senha</label>
              <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
          </div>
          <button type="submit">
            <p>Concluir</p>
          </button>
        </fieldset>
      </form>
    </main>
  </div>
@endsection

@section('scripts')
  <script src="/js/fileHandler.js" defer></script>
@endsection
