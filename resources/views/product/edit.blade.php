@extends('layout.master')

@section('content')
    <h1 class="mb-3">
        EDITAR PRODUTO
    </h1>
    <form method="POST" action="{{ route('product.update', $product->id) }}">
        @csrf
        @method('PUT')
        @include('product.form')
        <div class="row mt-3">
            <div class="col">
                <button class="btn btn-primary float-end">
                    SALVAR
                </button>
            </div>
        </div>
    </form>
@endsection
