@extends('layouts.app')

@section('content')
@include('admin.regiao.submenu')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">            
            <form method="post">
                {{ csrf_field() }}
                <div class="panel-body">
                    <div class="form-group col-lg-4">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" value="{{ $register->nome or null }}" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Loja</label>
                        <select name="loja_id" class="form-control" required>
                            <option value=""></option>
                            @foreach($Lojas as $Loja)
                            <option value="{{ $Loja->id }}" @if(isset($register)) {{ $register->loja_id==$Loja->id ? 'selected' : '' }} @endif>{{ $Loja->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Link Google Maps</label>
                        <input type="text" class="form-control" name="mapa_url" value="{{ $register->mapa_url or null }}" required>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Gravar</button>
                    @if(isset($register))
                    <a href="/regiao/{{ $register->id }}/bairro" class="btn btn-default">Bairros</a>
                    <a href="/regiao/{{ $register->id }}/delete" class="btn btn-danger" onclick="return confirm('Confirma a exclusão do registro ?')">Excluir</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

@endsection