<div class="col-xs-12">
    <div class="submenu">    
        <div class="row">
            <div class="col-xs-6 col-sm-4">
                <h2>Peças</h2>
            </div>
            <div class="col-xs-6 col-sm-4">

                @if( isset($familia_filter) )
                <form id="peca_familia_filter" action="/peca/familia" method="post">
                    {{ csrf_field() }}
                    <select name="id">
                        <option value="0">Todos</option>
                        @foreach($familias as $familia)
                            @if($familia->id == $familia_filter)
                                <option selected="true" value="{{$familia->id}}">{{$familia->nome}}</option>
                            @else
                                <option value="{{$familia->id}}">{{$familia->nome}}</option>
                            @endif
                        @endforeach
                    </select>
                </form>
                @endif
            </div>
            <div class="col-xs-6 col-sm-4">
                <a href="/peca" class="btn btn-default">Listar Todos</a>
                <a href="/peca/create" class="btn btn-default">Novo Peça</a>
            </div>
        </div>
    </div>
</div>