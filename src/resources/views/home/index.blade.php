@extends('layouts.master')

@php
  $pageName = 'Home';
@endphp

@section('styles')
  <link rel="stylesheet" href="/css/partials.css">
  <link rel="stylesheet" href="/css/home.css">
@endsection

@section('content')
  <div id="page-home">
    @include('partials.topbar')
    <main>
      @include('partials.navbar')

      <aside id="aside-content" class="with-nav">
        <div class="container">
          <h1>Minha Vitrine</h1>
          @if(count($products) === 0)
            <h1>Pronto para anunciar seu primeiro produto?</h1>
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
