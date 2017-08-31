@extends('layouts.app')

@section('content')
@include('admin.peca.submenu')


<div class="col-xs-12">
    <table id="table_display" class="table table-striped">
        <thead>
            <tr class="header">
                <th>ID</th>
                <th>Nome</th>
                <th>Familia id</th>
                <th>Familia Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pecas as $peca)
        <tr>
            <td>{{ $peca->id }}</td>
            <td>{{ $peca->nome }}</td>
            <td>{{ $peca->familia_id }}</td>
            <td>{{ $peca->familias->nome }}</td>
            <td>
                <a href="/peca/{{ $peca->id }}/edit" class="btn btn-sm btn-default">Editar</a>
                <a href="/peca/{{ $peca->id }}/destroy" class="btn btn-sm btn-default">Deletar</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection