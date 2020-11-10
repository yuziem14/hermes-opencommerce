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
            <x-product></x-product>
            <x-product></x-product>
            <x-product></x-product>
            <x-product></x-product>
            <x-product></x-product>
            <x-product></x-product>
          </div>
        </div>

        @include('parcials.pagination')
      </aside>
    </main>
  </div>
@endsection

@section('scripts')
@endsection
