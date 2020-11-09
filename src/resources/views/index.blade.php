@extends('layouts.master')

@section('styles')
  <link rel="stylesheet" href="/css/main.css">
@endsection

@section('content')
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
@endsection
