@extends('layouts.master')

@php
  $pageName = 'Produtos';
  $userAvatar = Auth::user()->avatar_filename;
  $fileUrl = $userAvatar ? '/uploads/avatars/'.$userAvatar : '/images/avatar.svg';
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
          <div class="products">
            <x-product></x-product>
            <x-product></x-product>
            <x-product></x-product>
            <x-product></x-product>
            <x-product></x-product>
            <x-product></x-product>
          </div>
        </div>

        @include('partials.pagination')
      </aside>
    </main>
  </div>
@endsection

@section('scripts')
@endsection
