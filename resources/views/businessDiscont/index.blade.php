@extends('layout.master')

@section('content')
    <h1>
        Descontos por categorias
    </h1>
    <a class="btn btn-xs btn-primary float-end" href="{{ route('business_discont.create') }}">
        NOVO
    </a>
    <a class="btn btn-xs btn-primary float-end" href="{{ route('product.index') }}">
        PRODUTOS
    </a>
    <table class="table table-striped">
        <thead>
        <th>ID DA CATEGORIA</th>
        <th>DESCONTO</th>
        <th>NOME DA CATEGORIA</th>
        <th>-</th>
        </thead>
        <tbody>
        @forelse($disconts AS $discont)
            <tr>
                <td>{{ $discont->category_id }}</td>
                <td>{{ $discont->discont_price }}</td>
                <td>{{ $discont->category->name }}</td>
                <td>
                    <a class="btn btn-xs btn-warning" href="{{ route('business_discont.edit', $discont->id) }}">
                        EDITAR
                    </a>
                    <form action="{{ route('business_discont.destroy', $discont->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-xs"
                                onclick="return confirm('Deseja realmente excluir o desconto ?')">
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
