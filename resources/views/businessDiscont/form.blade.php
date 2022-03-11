<div class="row">
    <div class="col">
        <label for="name" class="form-label">Porcentagem do desconto: </label>
        <input type="text" class="form-control" id="discont_price" name="discont_price" value="{{$discont->discont_price ?? ''}}">
    </div>
</div>
@if($discont)

@else
    <div class="row mt-3">
        <div class="col">
            <label for="category_id" class="form-label">Categoria: </label>
            <select class="form-select" name="category_id" id="category_id">
                @foreach($categories AS $category)
                    <option  value="{{ $category->id }}" @selected(old($category->id, $discont->category_id ?? '') === $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
@endif
