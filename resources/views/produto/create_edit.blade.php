@extends('site.template.templateSite')

@section('content')

    <h1>

        <a href="{{route('produto.index')}}"><span class="glyphicon glyphicon-arrow-left"></span></a>
        <br/>

        Gestão Produto:
        <b>{{ $produto->nome or 'Novo' }}</b>
    </h1>
    @if( isset($errors) && count($errors) > 0)
        <div class="alert-danger">
            @foreach($errors->all() as $item)
                <p>{{$item}}</p>
            @endforeach
        </div>
    @endif

    @if(isset($produto))
        {!! Form::model($produto, ['route'=> ['produto.update',$produto->id ], 'class'=>'form', 'method'=>'put'] ) !!}
    @else
        {!! Form::open(['route'=>'produto.store', 'class'=>'form']) !!}

    @endif
    <div class="form-group">
        <label for="nome">Nome</label>
        {!! Form::text('nome',null, ['class'=>'form-control', 'placeholder'=>'Nome']) !!}
    </div>
    <div class="form-group">
        <label for="nome">Número</label>
        {!! Form::text('numero',null, ['class'=>'form-control', 'placeholder'=>'Número']) !!}
    </div>
    <div class="form-check">
        <label class="form-check-label">
            {!! Form::checkbox('ativo',null, ['class'=>'form-check-input']) !!}
            Ativo?
        </label>
    </div>
    <div class="form-group">
        <label for="imagem">Imagem</label>
        <input type="file" class="form-control-file" id="imagem" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">Tamanho Máximo 5MB.
        </small>
    </div>
    <div class="form-group">
        <label for="categoria">Categoria</label>
        {!! Form::select('categoria',$categorias, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('descricao',null, ['class'=>'form-control', 'placeholder'=>'Descrição:']) !!}
    </div>

    {!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection