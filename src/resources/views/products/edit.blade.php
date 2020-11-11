@extends('layouts.master')

@php
  $pageName = 'Editar Produto';
@endphp

@section('styles')
  <link rel="stylesheet" href="/css/partials.css">
  <link rel="stylesheet" href="/css/edit-product.css">
@endsection
@section('content')
  <div id="page-edit-product">
    @include('partials.topbar')
    <main>
      <aside id="aside-content" class="container">
        @include('partials.products.form')
      </aside>
    </main>
  </div>
@endsection

@section('scripts')
  <script src="/js/multipleFileHandler.js" defer></script>
  <script src="/js/tagSelector.js" defer></script>
@endsection
