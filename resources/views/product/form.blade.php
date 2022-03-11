<div class="row">
    <div class="col">
        <label for="name" class="form-label">Nome: </label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name ?? '' }}">
    </div>
    <div class="col">
        <label for="sku" class="form-label">SKU: </label>
        <input type="text" class="form-control" id="sku" name="sku" value="{{ $product->sku ?? '' }}">
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <label for="price" class="form-label">Preço R$: </label>
        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price ?? '' }}">
    </div>
    <div class="col">
        <label for="category_id" class="form-label">Categoria: </label>
        <select class="form-select" name="category_id" id="category_id">
            <option>Selecione uma categoria</option>
            @foreach($categories AS $category)
                <option value="{{ $category->id }}" @selected(old($category->id, $product->category_id ?? '') === $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
</div>
