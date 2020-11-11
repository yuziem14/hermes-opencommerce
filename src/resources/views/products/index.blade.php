@extends('layouts.master')

@php
  $pageName = 'Produtos';
@endphp

@section('styles')
  <link rel="stylesheet" href="/css/partials.css">
  <link rel="stylesheet" href="/css/products-page.css">
@endsection

@section('content')
  <div id="page-products">
    @include('partials.topbar')
    <main>
      @include('partials.navbar')

      <aside id="aside-content" class="with-nav">
        <div class="container">
          <header>
            <h1>Produtos</h1>
            <a href="{{ route('products.create') }}">Anunciar Produto</a>
          </header>
            @if(count($products) === 0)
              <h1>Não há produtos a serem mostrados.</h1>
            @else
              <div class="products">
                @include('partials.products.products')
              </div>
            @endif
        </div>

        {{-- @include('partials.pagination') --}}
      </aside>
    </main>
  </div>
@endsection

@section('scripts')
@endsection
