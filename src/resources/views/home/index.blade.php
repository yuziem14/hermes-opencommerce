@extends('layouts.master')

@php
  $pageName = 'Home';
  $userAvatar = Auth::user()->avatar_filename;
  $fileUrl = $userAvatar ? '/uploads/avatars/'.$userAvatar : '/images/avatar.svg';
@endphp

@section('styles')
  <link rel="stylesheet" href="/css/parcials.css">
  <link rel="stylesheet" href="/css/home.css">
@endsection

@section('content')
  <div id="page-home">
    @include('parcials.topbar')
    <main>
      @include('parcials.navbar')

      <aside id="aside-content">
        <div class="container">
          <h1>Minha Vitrine</h1>
          <div class="products">

            <div class="product">
              <header>
                <div class="container">
                  <img
                    src="{{ $fileUrl }}"
                    alt="{{ Auth::user()->name }} Photo"
                  >
                  <div>
                    <h2>{{ Auth::user()->name }}</h2>
                    <p>{{ Auth::user()->username }}</p>
                  </div>
                </div>
              </header>
              <main>
                <div class="container">
                  <img
                    src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQDCV2NSF5KvNOCZ1hqSxLxKDD9_2LftHEFx7-HcWp9VoAcdKu3GPjoWJxlR5wtqrgi7PqYcqY&usqp=CAE"
                    alt="Luminária Saturno"
                  >
                  <div>
                    <h2>Luminária Saturno</h2>
                    <p>Eletrodomésticos, Utensílios, Decorações</p>
                  </div>
                </div>
              </main>
              <footer>
                <div class="container">
                  <p>
                    Preço <span>R$ 100,00</span>
                  </p>
                </div>
              </footer>
            </div>
            <div class="product">
              <header>
                <div class="container">
                  <img
                    src="{{ $fileUrl }}"
                    alt="{{ Auth::user()->name }} Photo"
                  >
                  <div>
                    <h2>{{ Auth::user()->name }}</h2>
                    <p>{{ Auth::user()->username }}</p>
                  </div>
                </div>
              </header>
              <main>
                <div class="container">
                  <img
                    src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQDCV2NSF5KvNOCZ1hqSxLxKDD9_2LftHEFx7-HcWp9VoAcdKu3GPjoWJxlR5wtqrgi7PqYcqY&usqp=CAE"
                    alt="Luminária Saturno"
                  >
                  <div>
                    <h2>Luminária Saturno</h2>
                    <p>Eletrodomésticos, Utensílios, Decorações</p>
                  </div>
                </div>
              </main>
              <footer>
                <div class="container">
                  <p>
                    Preço <span>R$ 100,00</span>
                  </p>
                </div>
              </footer>
            </div>
            <div class="product">
              <header>
                <div class="container">
                  <img
                    src="{{ $fileUrl }}"
                    alt="{{ Auth::user()->name }} Photo"
                  >
                  <div>
                    <h2>{{ Auth::user()->name }}</h2>
                    <p>{{ Auth::user()->username }}</p>
                  </div>
                </div>
              </header>
              <main>
                <div class="container">
                  <img
                    src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQDCV2NSF5KvNOCZ1hqSxLxKDD9_2LftHEFx7-HcWp9VoAcdKu3GPjoWJxlR5wtqrgi7PqYcqY&usqp=CAE"
                    alt="Luminária Saturno"
                  >
                  <div>
                    <h2>Luminária Saturno</h2>
                    <p>Eletrodomésticos, Utensílios, Decorações</p>
                  </div>
                </div>
              </main>
              <footer>
                <div class="container">
                  <p>
                    Preço <span>R$ 100,00</span>
                  </p>
                </div>
              </footer>
            </div>

          </div>
        </div>

        @include('parcials.pagination')
      </aside>
    </main>
  </div>
@endsection

@section('scripts')
@endsection
