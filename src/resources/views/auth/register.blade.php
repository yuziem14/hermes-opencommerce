@extends('layouts.master')

@section('styles')
  <link rel="stylesheet" href="/css/register.css">
@endsection

@section('content')
  <div id="page-register">
    <header>
      <nav>
        <a href="{{ route('index') }}">
          <img src="/images/arrow.svg" alt="Go Back">
        </a>
        <img src="/images/wordmark.svg" alt="Hermes | Wordmark">
      </nav>
      <div class="container">
        <h1>Criar uma conta</h1>
        <h3>Venha fazer parte do nosso marketplace.</h3>
      </div>
    </header>
      <main class="container @if($errors->any()) tremble @endif">
        <form
          action="{{ route('register.store') }}"
          enctype="multipart/form-data"
          method="POST"
        >
          @csrf
          <div class="input-group">
            <div class="file-selector">
              <img src="/images/camera.svg" alt="Add Photo">
              <input
                type="file"
                id="photo"
                name="photo"
                accept="image/jpeg,image/png"
              >
            </div>
            @error('photo')
              <p class="error-message">{{ $message }}</p>
            @enderror
          </div>
          <fieldset class="container">
            <legend>Seus dados</legend>
            <div>
              <div class="input-group">
                <label for="name">Nome</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  value="{{ old('name') }}"
                  minlength="3"
                  maxlength="255"
                  required
                >
                @error('name')
                  <p class="error-message">{{ $message }}</p>
                @enderror
              </div>
              <div class="input-group">
                <label for="username">Nome de usuário (Nickname)</label>
                <input
                  type="text"
                  id="username"
                  name="username"
                  value="{{ old('username') }}"
                  minlength="4"
                  maxlength="255"
                  required
                >
                @error('username')
                  <p class="error-message">{{ $message }}</p>
                @enderror
              </div>
              <div class="input-group">
                <label for="email">E-mail</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  value="{{ old('email') }}"
                  maxlength="255"
                  required
                >
                @error('email')
                  <p class="error-message">{{ $message }}</p>
                @enderror
              </div>
              <div class="input-group">
                <label for="password">Senha</label>
                <input
                  type="password"
                  id="password"
                  name="password"
                  minlength="8"
                  maxlength="60"
                  required
                >
                @error('password')
                  <p class="error-message">{{ $message }}</p>
                @enderror
              </div>
              <div class="input-group">
                <label for="password_confirmation">Confirmar senha</label>
                <input
                  type="password"
                  id="password_confirmation"
                  name="password_confirmation"
                  minlength="8"
                  maxlength="60"
                  required
                >
                @error('password_confirmation')
                  <p class="error-message">{{ $message }}</p>
                @enderror
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
