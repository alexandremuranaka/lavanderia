@extends('layouts.app')

@section('content')
@include('admin.regiao.submenu')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Bairros da Região {{ $regiao->nome }} ( Loja {{ $regiao->loja->nome or null }} )
            </div>
            <form method="post" class="form-inline">
            {{ csrf_field() }}
                <div class="panel-body">
                    <div class="form-group">
                        <label>Nome do Bairro</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Adicionar Bairro</button>
                    <a href="/regiao/{{ $regiao->id }}" class="btn btn-default">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">            
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>                            
                            <th>Bairro</th>
                            <th style="width:100px"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($regiao->bairros as $bairro)
                    <tr>
                        <td>{{ $bairro->nome }}</td>
                        <td>
                            <a href="/regiao/{{ $regiao->id }}/bairro/{{ $bairro->id }}/delete" onclick="return confirm('Confirma a exclusão deste registro?')" class="btn btn-sm btn-danger">Excluir</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection