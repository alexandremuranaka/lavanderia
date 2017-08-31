@extends('layouts.app')

@section('content')
@include('admin.peca.submenu')

<div class="col-xs-12">
    
    <form class="form_basic" method="post" action="/peca/store">
        {{ csrf_field() }}
        <label>Nome da Peça</label>
        <input type="text" name="nome" placeholder="Digite o nome da Peça" />

        @if ($errors->has('nome'))
            <span class="error">{{$errors->first('nome')}}</span>
        @endif

        <label>Familia da Peça</label>
        <select name="familia_id">
            <option value="">Selecione a família</option>
            @foreach($familias as $familia )

            <option value="{{$familia->id}}">{{$familia->nome}}</option>

            @endforeach
        </select>

        @if ($errors->has('familia_id'))
            <span class="error">{{$errors->first('familia_id')}}</span>
        @endif
        <div class="row"><div class="col-xs-12 col-sm-4"><button class="btn btn-primary">Salvar Peça</button></div></div>
        <div class="clearfix"></div>

    </form>
</div>


@endsection