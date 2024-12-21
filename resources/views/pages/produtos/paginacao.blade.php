{{-- Extends da index --}}

@extends('index')

@section('content')
    <!-- Conteúdo da página -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>
    <div class="">
        <form action="{{ route('produto.index') }}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome" id="">
            <button> Pesquisar </button>
            <a type="button" class="btn btn-success float-end" href="{{ route('cadastrar.produto') }}"> Incluir Produto</a>
        </form>

        {{-- <h2>Section title</h2> --}}
        <div class="table-responsive mt-4">
            @if ($findProdutos->isEmpty())
                <p>Não existe dados</p>               
            @else
                    
            

        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($findProdutos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ 'R$' . ' ' . number_format( $produto->valor, 2, ',', '.') }}</td>
                    <td>
                        <a class="btn btn-light btn-sm" href="">
                            Editar
                        </a>

                        <meta name='csrf-token' content="{{ csrf_token() }}">
                        <a class="btn btn-danger btn-sm" onclick="deleteRegistroPaginacao( '{{ route('produto.delete') }}', {{ $produto->id }} )">
                            Apagar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif

        </div> 
    </div>
@endsection