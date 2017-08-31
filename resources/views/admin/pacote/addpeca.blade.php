@extends('layouts.app')

@section('content')
@include('admin.pacote.submenu')


<div class="col-xs-12">

    <form method="post" action="/pacote/{{ $pacote->id }}/adicionar-peca"  class="form_basic">
        {{ csrf_field() }}
        <select data-placeholder="Selecione o Exame" class="chosen-select" style="width:100%;" tabindex="2" name="produto_id[]" multiple>
            @foreach($pecas as $peca)

                @if(in_array( $peca->id, $checked  ))
                    <option selected="true" value="{{ $peca->id }}"> {{$peca->nome}}</option>
                @else
                    <option value="{{ $peca->id }}" > {{$peca->nome}}</option>
                @endif

            @endforeach
        </select>
        <div class="row">
            <div class="col-xs-12 col-sm-4"><button class="btn btn-primary">Salvar Pacote</button></div>
        </div>
    </form>

</div>


@endsection
