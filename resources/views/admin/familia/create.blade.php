@extends('layouts.app')

@section('content')
@include('admin.familia.submenu')

<div class="col-xs-12">
    <form class="form_basic" method="post" action="/familia/store">
        {{ csrf_field() }}
        <div class="col-xs-12 col-sm-12">
            <label>Nome da Familia</label>
            <input type="text" name="nome" placeholder="Digite o nome da Familia" />
        </div>
        @if ($errors->has('nome'))
            <div class="col-xs-12 col-sm-3"><span class="error">{{$errors->first('nome')}}</span></div>
        @endif

        <div class="col-xs-12 col-sm-3"><button class="btn btn-primary">Salvar Família</button></div>
        <div class="clearfix"></div>
    </form>
</div>

@endsection