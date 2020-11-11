@if(isset($products) && !empty($products))
  @foreach($products as $product)
    <a href="{{ route('products.show', $product->id) }}" class="product">
      <header>
        <div class="container">
          <img
            src="{{ $product->user->avatar_filename ? '/uploads/avatars/'.$product->user->avatar_filename : '/images/avatar.svg' }}"
            alt="{{ $product->user->name }} Photo"
          >
          <div>
            <h2>{{ $product->user->name }}</h2>
            <p>{{ $product->user->username }}</p>
          </div>
        </div>
      </header>
      <main>
        <div class="container">
          <img
            src="uploads/products/{{ $product->images[0]->filename }}"
            alt="{{ $product->name }}"
          >
          <div>
            <h2>{{ $product->name }}</h2>
            <p>{{ implode(', ', array_column($product->tags->toArray(), 'name')) }}</p>
          </div>
        </div>
      </main>
      <footer>
        <div class="container">
          <p>
            Preço <span>R$ {{ number_format($product->price, 2, ',', '.') }}</span>
          </p>
        </div>
      </footer>
    </a>
  @endforeach
@endif
