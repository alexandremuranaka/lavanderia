@extends('layouts.app')

@section('content')
@include('admin.frete.submenu')

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
                        <label>Ativo</label>
                        <select name="ativo" class="form-control" required>
                            <option value=""></option>
                            <option value="1" @if(isset($register)) {{ $register->ativo==1 ? 'selected' : '' }} @endif>SIM</option>
                            <option value="0"  @if(isset($register)) {{ $register->ativo==0 ? 'selected' : '' }} @endif>NÃO</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Prazo de Entrega</label>
                        <input type="text" class="form-control" name="prazo_entrega" value="{{ $register->prazo_entrega or null }}" required>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Gravar</button>
                    @if(isset($register))                    
                    <a href="/frete/{{ $register->id }}/delete" class="btn btn-danger" onclick="return confirm('Confirma a exclusão do registro ?')">Excluir</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

@if(isset($register))
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">    
            <div class="panel-heading">
                Rotas
                <div class="pull-right">                    
                        <a href="/frete/{{ $register->id }}/rota" class="btn btn-primary">Cadastrar Rota</a>                   
                </div>
            </div>        
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Ativo</th>
                            <th>Dias</th>
                            <th>Períodos</th>
                            <th>Região</th>
                            <th>Valor</th>
                            <th style="width:100px"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($register->rotas as $rota)
                    <tr>
                        <td>{{ $rota->id }}</td>
                        <td>{{ $rota->nome }}</td>
                        <td>{{ $rota->ativo==1 ? 'Sim' : 'Não' }}</td>
                        <td>{{ $rota->dias }}</td>
                        <td>{{ $rota->periodos }}</td>
                        <td>{{ $rota->regiao->nome }}</td>
                        <td>
                            @if($rota->valor_de)
                            <s>R$ {{ number_format($rota->valor_de,2,',','.') }}</s> &nbsp;
                            @endif
                            R$ {{ $rota->valor_por }}
                        </td>
                        <td>
                            <a href="/frete/{{ $register->id }}/rota/{{ $rota_id }}" class="btn btn-sm btn-default">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endif
@endsection