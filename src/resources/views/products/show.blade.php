@extends('layouts.master')

@php
  $pageName = $product->name;
@endphp

@section('styles')
  <link rel="stylesheet" href="/css/partials.css">
  <link rel="stylesheet" href="/css/product-page.css">
@endsection

@section('content')
  <div id="page-product">
    @include('partials.topbar')
    <main>
      @include('partials.navbar')

      <aside id="aside-content" class="with-nav">
        <div class="container">
          <header>
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p>
              @php
                $tagsString = implode(', ', array_column($product->tags->toArray(), 'name'));
                echo 'Incluído em: ';
                echo $tagsString === '' ? 'Outros' : $tagsString;
              @endphp
            </p>
          </header>
          <main>
            <div class="product-images">
              @foreach($product->images as $image)
                <img
                  src="/uploads/products/{{ $image->filename }}"
                  alt="Product Image"
                />
              @endforeach
            </div>
          </main>
          <footer>
            <div class="info">
              <p>por<span>R$ {{ number_format($product->price, 2, ',', '.') }}</span></p>
              <p>Há <span>{{ $product->amount }}</span> disponíveis</p>
            </div>
            @if(Auth::user()->id === $product->user->id)
              <div class="actions">
                <a class="action" href="{{ route('products.edit', $product->id) }}">
                  <img src="/images/edit.svg" alt="Edit" />
                  <p>Editar</p>
                </a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="action">
                    <img src="/images/trash.svg" alt="Delete">
                    <p>
                      Excluir
                    </p>
                  </button>
                </form>
              </div>
            @endif
          </footer>
        </div>
      </aside>
    </main>
  </div>
@endsection

@section('scripts')
@endsection
