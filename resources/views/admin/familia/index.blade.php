@extends('layouts.app')

@section('content')
@include('admin.familia.submenu')

<div class="col-xs-12">
    <table id="table_display" class="table table-striped">
        <thead>
            <tr class="header">
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
         @foreach($familias as $familia)
            <tr>
                <td>{{ $familia->id }}</td>
                <td>{{ $familia->nome }}</td>
                <td width="250px">
                    <a href="/familia/{{ $familia->id }}/edit" class="btn btn-sm btn-default">Editar</a>
                    <a href="/familia/{{ $familia->id }}/destroy" class="btn btn-sm btn-default">Deletar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>





@endsection