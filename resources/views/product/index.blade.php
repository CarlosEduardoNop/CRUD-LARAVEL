@extends('layout.master')

@section('content')
    <h1>
        PRODUTOS
    </h1>
    <a class="btn btn-xs btn-primary float-end" href="{{ route('product.create') }}">
        NOVO
    </a>
    <a class="btn btn-xs btn-primary float-end" href="{{ route('business_discont.index') }}">
        DESCONTOS
    </a>
    <table class="table table-striped">
        <thead>
            <th>NOME</th>
            <th>SKU</th>
            <th>PREÇO</th>
            <th>CATEGORIA</th>
            <th>-</th>
        </thead>
        <tbody>
            @forelse($products AS $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->name}}</td>
                    <td>
                        <a class="btn btn-xs btn-warning" href="{{ route('product.edit', $product->id) }}">
                            EDITAR
                        </a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs"
                                    onclick="return confirm('Deseja realmente excluir o registro ?')">
                                EXCLUIR
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" align="center">
                        <span class="text-danger">Nenhum Registro Encontrado</span>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
