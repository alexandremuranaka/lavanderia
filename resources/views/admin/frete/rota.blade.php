@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-heading">
        @if(isset($register)) Editar @else Cadastrar @endif rota em {{ $frete->nome }}
        </div>
        <div class="panel panel-default">            
            <form method="post">
                {{ csrf_field() }}
                <div class="panel-body">
                    <div class="form-group col-lg-4">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" value="{{ $register->nome or null }}" required>
                    </div>
                   
                    <div class="form-group col-lg-4">
                        <label>Região</label>
                        <select name="loja_regiao_id" class="form-control" required>
                            <option value=""></option>
                            @foreach($regioes as $regiao)
                            <option value="{{ $regiao->id }}" @if(isset($register)) {{ $register->loja_regiao_id==$regiao_id ? 'selected' : '' }} @endif>{{ $regiao->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                     <div class="form-group col-lg-4">
                        <label>Ativo</label>
                        <select name="ativo" class="form-control" required>
                            <option value=""></option>
                            <option value="1" @if(isset($register)) {{ $register->ativo==1 ? 'selected' : '' }} @endif>SIM</option>
                            <option value="0"  @if(isset($register)) {{ $register->ativo==0 ? 'selected' : '' }} @endif>NÃO</option>
                        </select>
                    </div>

                    <div class="form-group col-lg-6">
                        <label>Período</label>
                        <br />
                        <label class="checkbox-inline">
                            <input type="checkbox" name="periodos[]" value="M"> Manhã
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="periodos[]" value="T"> Tarde
                        </label>
                        
                    </div>

                     
                    <div class="form-group col-lg-6">
                        <label>Dias</label>
                        <?php
                        $arrDiasSemana = ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'];
                        $arrDindex = array_keys($arrDiasSemana);
                        ?>
                        <br />
                        @foreach($arrDindex as $di)
                        <label class="checkbox-inline">
                            <input type="checkbox" name="dias[]" value="{{ $arrDindex[$di] }}"> {{ $arrDiasSemana[$di] }}
                        </label>
                        @endforeach
                    </div>
                   
                   <div class="form-group col-lg-6">
                        <label>Valor Regular</label>
                        <input type="text" name="valor_de" class="form-control money" required>
                   </div>
                   <div class="form-group col-lg-6">
                        <label>Valor Promocional</label>
                        <input type="text" name="valor_por" class="form-control money">
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

@endsection