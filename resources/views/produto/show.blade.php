@extends('site.template.templateSite')

@section('content')

    <h1>
        <a href="{{route('produto.index')}}"><span class="glyphicon glyphicon-arrow-left"></span></a>
        <br/>

        Produto:
        <b>{{$produto->nome}}</b>
    </h1>

    @if( isset($errors) && count($errors) > 0)
        <div class="alert-danger">
            @foreach($errors->all() as $item)
                <p>{{$item}}</p>
            @endforeach
        </div>
    @endif

    <p><b>Número:</b> {{ $produto->numero }} </p>
    <p><b>Ativo:</b> {{ $produto->ativo }} </p>
    <p><b>Categoria:</b> {{ $produto->categoria }} </p>
    <p><b>Descrição:</b> {{ $produto->descricao }} </p>

    <hr>

    {!! Form::open(['route'=> ['produto.destroy',$produto->id ], 'class'=>'form', 'method'=>'delete'] ) !!}

    {!! Form::submit('Excluir produto', ['class'=>'btn btn-danger']) !!}

    {!! Form::close() !!}

@endsection