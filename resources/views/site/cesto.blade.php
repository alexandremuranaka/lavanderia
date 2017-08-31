@extends('layouts.site')

@section('content')



<section id="passos_checkout">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-3">
        <div class="step step1 active"><p>1. Simulador de lavagem</p></div>
      </div>
      <div class="col-xs-12 col-sm-3">
        <div class="step ball"><p>2. Identificação</p></div>
      </div>
      <div class="col-xs-12 col-sm-3">
        <div class="step ball"><p>3. Retirada & Entrega</p></div>
      </div>
      <div class="col-xs-12 col-sm-3">
        <div class="step ball step4"><p>4. Resutmo & Pagamento</p></div>
      </div>
    </div>
  </div>
</section>

<section id="avatar_checkout">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <h1>Simulador de Lavagem</h1>
      </div>
      <div class="col-xs-12 col-sm-4 col-sm-offset-4">
        <hr/>
      </div>
      <div class="clearfix"></div>
      <div class="col-xs-12 col-sm-2">
        <img class="speak" src="assets/images/ladydev.png"/>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="message">
          <h4>Nunca usou lavanderia?</h4>
          <p>A Clean Express tem cestos que contém poucas peças, para você testar e aprovar a qualidade do serviço sem gastar muito.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="conteudo_checkout">
  <div class="container">
    <div class="row">
      
      <div class="col-xs-12 col-sm-8">
        <div class="row">


          @foreach($pacotes as $pacote)
          <div class="col-xs-12 col-sm-6">
            <div class="cesto">
              <h3><img src="assets/images/basket.svg"> {{$pacote->nome}}</h3>
              <h4><em>R$ 80,00</em> <strong>R$ 72,00</strong></h4>
              <p><span class="valor">10</span> camisas sociais</p>
              <div class="slider">
                <input class="jslider" type="range"  value="10" data-min="10" data-max="30" data-step="10">
              </div>
              <p><strong>Peças que podem ser lavadas:</strong><br/> {{$pacote->descricao}}</p>
              <div class="col-xs-12 col-sm-8 col-sm-offset-2"><button class="btn btn-primary">Adicionar cesto</button></div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <div class="col-xs-12 col-sm-4">
        <div id="minha_maquina">
          <form methor="post" action="">
           <h1><img src="assets/images/laundry_white.svg" alt="icone " /> Minha máquina</h1>
            <div class="conteudo">
              
              
              <div class="item">
                <h3>Cesto social <i class="fa fa-trash btn_excluir"></i></h3>
                <div class="preco"><p><span>10% off</span> <strong><em>R$ 40,00</em> R$ 36,00</strong></p></div>
                <p><strong>Peças que podem ser lavadas:</strong> 1 Blazer/Paletó + 1 Calça social/Saia social/ Camisa polo.</p>
              </div>

            </div>
            <div class="total">
              
            </div>
            
            <div class="col-xs-12 col-sm-10 col-sm-offset-1"><button class="btn btn-primary">Agendar Retirada</button></div>

          </form>
        </div>

        <div id="nenhum">
          <h2>Nenhum cesto te agrada?</h2>
          <p>Monte um cesto do seu jeito!</br/>Coloque roupas diferentes e misture peças de tipos diferentes</p>
          <div class="col-xs-12 col-sm-10 col-sm-offset-1"><a href="cesto-customizado.php"><button class="btn btn-primary">Montar meu cesto</button></a></div>
        </div>

      </div>
    </div>
  </div>
</section>


<section id="guia_checkout">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-sm-offset-2">
          <div class="guia">
            <img src="assets/images/machine.jpg">
            <h3>Já é cliente de lavanderia?</h3>
            <p>
              Use nosso simulador.</br/>
              Compare precços e confira as vantagens de lavar com a Clean Express.
            </p>
          </div>
      </div>
      <div class="col-xs-12 col-sm-4">
          <div class="guia">
            <img src="assets/images/feet.jpg">
            <h3>Não tem muita experiencia?</h3>
            <p>
              Nós conhecemos os perfis dos nossos clientes e podemos te ajudar a escolher!
            </p>
          </div>

      </div>
    </div>
  </div>
</section>

@endsection