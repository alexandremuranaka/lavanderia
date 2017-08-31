@extends('layouts.app')

@section('content')
@include('admin.frete.submenu')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">            
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th style="width:100px"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($registers as $register)
                    <tr>
                        <td>{{ $register->id }}</td>
                        <td>{{ $register->nome }}</td>
                        <td>
                            <a href="/frete/{{ $register->id }}" class="btn btn-sm btn-default">Abrir</a>                            
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