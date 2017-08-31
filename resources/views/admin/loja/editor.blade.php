@extends('layouts.app')

@section('content')
@include('admin.loja.submenu')

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
                        <label>CNPJ</label>
                        <input type="text" class="form-control" name="cnpj" value="{{ $register->cnpj or null }}" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Ativo</label>
                        <select name="ativo" class="form-control" required>
                            <option value=""></option>
                            <option value="1" @if(isset($register)) {{ $register->ativo==1 ? 'selected' : '' }} @endif>SIM</option>
                            <option value="0"  @if(isset($register)) {{ $register->ativo==0 ? 'selected' : '' }} @endif>NÃO</option>
                        </select>
                    </div>

                    <div class="form-group col-lg-12">
                        <label>Parâmetros JSON</label>
                        <textarea name="params" class="form-control">{{ $register->params or null }}</textarea>
                    </div>

                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Gravar</button>
                    @if(isset($register))
                    <a href="/loja/{{ $register->id }}/delete" class="btn btn-danger" onclick="return confirm('Confirma a exclusão do registro ?')">Excluir</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

@endsection