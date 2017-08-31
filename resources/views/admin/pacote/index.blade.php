@extends('layouts.app')

@section('content')
@include('admin.pacote.submenu')

<div class="col-xs-12">

@foreach($pacotes as $pacote)
    <div class="mod_faq">
        <h3>{{$pacote->nome }} <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i><a href="/pacote/{{$pacote->id}}/adicionar-peca">Alterar peças</a></h3>
        <div class="content">
            <ul>
                @foreach($pacote->pecas as $peca)
                 <li>{{$peca->nome}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endforeach

</div>

@endsection