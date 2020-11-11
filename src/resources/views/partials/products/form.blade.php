<form
  id="product-form"
  action="{{ route('products.store') }}"
  method="POST"
  enctype="multipart/form-data"
  class="container @if($errors->any()) tremble @endif"
>
  @csrf
  <fieldset class="container">
    <legend>Dados do Produto</legend>
    <div class="uploaded-images multiple-file-container">
      <div class="input-group">
        <div class="multiple-file-selector">
          <img src="/images/file-plus.svg" alt="Add Images">
          <input
            type="file"
            id="images[]"
            name="images[]"
            multiple="multiple"
            accept="image/jpeg,image/png"
          >
        </div>
        @error('images')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
    </div>
    <div>
      <div class="input-group">
        <label for="name">Nome</label>
        <input
          type="text"
          name="name"
          id="name"
          minLength="4"
          maxLength="255"
          value="{{ old('name') }}"
          required
        >
        @error('name')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="input-group">
        <label for="description">Descrição</label>
        <textarea
          type="text"
          rows="4"
          name="description"
          id="description"
          minLength="4"
        >{{old('description')}}</textarea>
        @error('description')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="input-group">
        <label for="price">Preço</label>
        <input
          type="number"
          id="price"
          name="price"
          min="0"
          step="0.01"
          value="{{ old('price') }}"
          required
        >
        @error('price')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="input-group">
        <label for="amount">Quantidade</label>
        <input
          type="number"
          id="amount"
          name="amount"
          min="1"
          step="1"
          value="{{ old('amount') }}"
          required
        >
        @error('amount')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="input-group">
        <label for="tags">Tags</label>
        <select
          id="tags"
        >
          <option value="" selected disabled>Selecione uma tag</option>
          @foreach($tags as $tag)
            <option value="{{ $tag->slug }}">{{ $tag->name }}</option>
          @endforeach
        </select>
        @error('tags')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="selected-tags">
        {{-- <div class="tag">
          <input type="hidden" name="tags[]" value="eletrodomesticos">
          <p>Eletrodomésticos</p>
          <img src="/images/close.svg" alt="Unselect"/>
        </div> --}}
      </div>
    </div>
    <button type="submit">
      <p>Concluir</p>
    </button>
  </fieldset>
</form>
