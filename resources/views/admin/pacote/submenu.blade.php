<div class="col-xs-12">
    <div class="submenu">    
        <div class="row">
            <div class="col-xs-6 col-sm-8">
                <h2>Pacote @if( isset($pacote->nome)): {{$pacote->nome}}@endif</h2>
            </div>
            <div class="col-xs-6 col-sm-4">
                <a href="/pacote" class="btn btn-default">Listar Todos</a>
                <a href="/pacote/create" class="btn btn-default">Novo Pacote</a>
            </div>
        </div>
    </div>
</div>