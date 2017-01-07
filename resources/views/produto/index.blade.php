@extends('site.template.templateSite')

@section('content')

    <h1>Produto - Index</h1>

    <div>
        <a href="{{ route('produto.create') }}" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus">Cadastrar</span>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>
                    Nome
                </th>
                <th>
                    Descrição
                </th>
                <th>
                    Ações
                </th>
            </tr>
            @foreach($produtos as $item)
                <tr>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->descricao}}</td>
                    <td>
                        <a href="{{ route('produto.edit', $item->id) }}">
                            <span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="{{ route('produto.show', $item->id) }}">
                            <span class="glyphicon glyphicon-eye-open"></span></a>
                        <!--
                        <a href="{{ route('produto.destroy', $item->id) }}">
                            <span class="glyphicon glyphicon-trash"></span></a>
                        -->
                    </td>
                </tr>

            @endforeach

        </table>

    </div>
@endsection