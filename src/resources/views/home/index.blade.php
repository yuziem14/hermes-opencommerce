@extends('layouts.master')

@php
  $pageName = 'Home';
  $userAvatar = Auth::user()->avatar_filename;
  $fileUrl = $userAvatar ? '/uploads/avatars/'.$userAvatar : '/images/avatar.svg';
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
