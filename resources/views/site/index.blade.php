@extends('layouts.site')

@section('content')



<div id="modal_promo" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Promoção de dia das mães</h4>
      </div>
      <div class="modal-body">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2"><img src="assets/images/dia-das-maes.png"></div>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2"><p>Aproveite agora nosso cupom de 10% off em qualquer lavagem</p></div>
        <div class="col-xs-12 col-sm-6 col-sm-offset-3"><button class="btn btn-primary">Aproveitar</button></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="modal_cep" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Área de atendimento</h4>
      </div>
      <div class="modal-body">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1"><p>Por enquanto, nós atendemos a Grande São Paulo. Por favor digite seu CEP e verifique se sua casa está na nossa área de atendimento</p></div>
        <div class="col-xs-12 col-sm-6 col-sm-offset-3"><input class="cep" type="text" placeholder="Digite 00000-000 e 55555-555" /></div>
        <div class="col-xs-12 col-sm-6 col-sm-offset-3"><button id="btn_cep" class="btn btn-primary">Verificar</button></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="modal_cobertura" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">CEP fora da cobertura</h4>
      </div>
      <div class="modal-body">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1"><p>Infelizmente ainda não cobrimos a área do seu CEP. <br/><strong>Deixe suas informações de contato</strong> e avisaremos quando começarmos a atender sua área</p></div>
        <div class="col-xs-12 col-sm-10 col-sm-offset-1"><input type="text" placeholder="Nome Completo" /></div>
        <div class="col-xs-12 col-sm-10 col-sm-offset-1"><input type="text" placeholder="E-mail" /></div>
        <div class="col-xs-12 col-sm-10 col-sm-offset-1"><input type="text" placeholder="Telefone" /></div>
        <div class="col-xs-12 col-sm-6 col-sm-offset-3"><button id="btn_cep" class="btn btn-primary">Enviar</button></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>



<section id="bannerHome">
  <div class="container-fluid">
    <div class="row">

        <div id="slider" class="banner carousel slide" data-ride="carousel" data-interval="8000">

          <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image: url(assets/images/lavanderia7.jpg);">
                <div class="carousel-caption">
                  <div class="col-xs-12 col-sm-12"><h2>Roupa lavada, passada e entregue à sua conveniência!</h2></div>
                  <div class="col-xs-12 col-sm-12"><p>Veja o video e entenda como nosso processo funciona!</p></div>
                </div>
            </div>
          </div>

          <div class="bg_overlay bg_overlay_video">
            <div id="banner_video" class="col-xs-12 col-sm-6 col-sm-offset-3">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe id="video_frame" class="embed-responsive-item" src="https://www.youtube.com/embed/o2ThONwh08w" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          </div>

          <div class="btn_video active"><p><i class="fa fa-play-circle"></i></p></div>
        </div>

    </div>
  </div>
</section>

<section id="action">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-9">
        <h2>Gostou da nossa proposta</h2>
          <p>Veja se nós atendemos na sua região!</p>
      </div>
      <div class="col-xs-12 col-sm-3">
        <button class="btn btn-primary btn_montar_cesto">Monte seu Cesto</button>
      </div>
    </div>
  </div>
</section>

<section id="comofunciona">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <h1>Lavar roupas nunca foi tão fácil!</h1>
      </div>
      <div class="col-xs-12 col-sm-4 col-sm-offset-4">
        <hr/>
      </div>
      <div class="col-xs-12 col-sm-6 col-sm-offset-3">
        <h4>Veja Como a Clean Express Funciona:</h4>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="mod_comofunciona">
          <img src="assets/images/smartphone.svg" />
          <h3>Separe suas roupas</h3>
          <p>Faça uma simulação, monte seu plano personalizado e escolha a melhor dia e horário para a retirada e entrega.</p>
        </div>
        <div class="mod_comofunciona">
          <img src="assets/images/delivery-truck.svg" />
          <h3>Faça seu pedido online</h3>
          <p>Um de nossos motoristas pegará suas roupas no horário combinado e colocará tudo em sacos lacrados.</p>
        </div>
        <div class="mod_comofunciona">
          <img src="assets/images/shirt.svg" />
          <h3>Receba suas roupas lavadas</h3>
          <p>Novamente, no horário combinado, suas roupas serão entregues lavadas e passadas.</p>
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-6">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/o2ThONwh08w" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="nossosnumeros" class="number_count number_count_bg_image" style="background-image:url(assets/images/slide2.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 wow fadeIn" data-number="5000">
        <h1>+  <span class="number_animated">0</span></h1>
        <p>Clientes atendidos</p>
      </div>
      <div class="col-xs-12 col-sm-4 wow fadeIn" data-number="100000">
        <h1>+  <span class="number_animated">0</span></h1>
        <p>Peças lavadas</p>
      </div>
      <div class="col-xs-12 col-sm-4 wow fadeIn">
        <h1>
          <i class="fa fa-star active wow fadeIn" data-wow-delay="0.5s"></i>
          <i class="fa fa-star active wow fadeIn" data-wow-delay="1s"></i>
          <i class="fa fa-star active wow fadeIn" data-wow-delay="1.5s"></i>
          <i class="fa fa-star active wow fadeIn" data-wow-delay="2s"></i>
          <i class="fa fa-star wow fadeIn" data-wow-delay="2.5s"></i>
        </h1>
        <p>Qualidade de atendimento</p>
      </div>

    </div>
  </div>
</section>

<section id="destaques" class="feature feature_image">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12"><h1>Poque usar a Clean Express?</h1></div>
      <div class="col-xs-12 col-sm-4  col-sm-offset-4"><hr/></div>
      <div class="col-xs-12 col-sm-12"><h2>Descubra algumas das vantagens de confiar suas roupas conosco.</h2></div>

        <div class="col-xs-12 col-sm-3">
            <div class="mod_destaques">
              <h3>
                <div class="border"><img src="assets/images/money-bag.svg" alt="icone" /></div><br/>
                Preços Personalizados
              </h3>
              <p>Acreditamos que cada cliente é único e merece pagar somente pelo que usar.</p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="mod_destaques">
              <h3>
                <div class="border"><img src="assets/images/calendar.svg" alt="icone" /></div><br/>
                Conveniência
              </h3>
              <p>Nós vamos até você, no dia e horário que você preferir, tanto na retirada quanto na entrega.</p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="mod_destaques">
              <h3>
                <div class="border"><img src="assets/images/laundry.svg" alt="icone" /></div><br/>
                Profissionalismo
              </h3>
              <p>Somos cuidadosos e temos tecnologia de ponta para garantir uma limpeza de qualidade.</p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="mod_destaques">
              <h3>
                <div class="border"><img src="assets/images/padlock.svg" alt="icone" /></div><br/>
                Segurança
              </h3>
              <p>Lacramos todas as sacolas e cada peça é monitorada individualmente.</p>
            </div>
        </div>

    </div>
  </div>
</section>

<section id="depoimentos">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1">
        
        <div id="depoimento_banner" class="banner carousel slide" data-ride="carousel" data-interval="80000">
         
          <div class="carousel-inner" role="listbox">

              <div class="item active">
                  <div class="col-xs-12 col-sm-12"><p>“I recommend your services to all my friends and colleagues. I loved how fast and efficient the help from your tech team came.”</p></div>
                  <div class="col-xs-12 col-sm-2 col-sm-offset-5">
                    <img src="assets/images/gabriel.jpg" alt="Gabriel Farias">
                  </div>
                  <div class="col-xs-12 col-sm-12">
                    <h3>Gabriel Farias</h3>
                  </div>
              </div>
            
              <div class="item ">
                  <div class="col-xs-12 col-sm-12"><p>Vivamus feugiat feugiat urna. Vivamus tincidunt viverra eros, at luctus tortor semper sed. Fusce varius magna ut erat pretium, at ullamcorper dui dapibus. Quisque at metus sodales, posuere ligula ac, sagittis risus.</p></div>
                  <div class="col-xs-12 col-sm-2 col-sm-offset-5">
                    <img src="assets/images/janedoe.jpg" alt="Jane Doe">
                  </div>
                  <div class="col-xs-12 col-sm-12">
                    <h3>John Doe</h3>
                  </div>
              </div>

              <div class="item ">
                  <div class="col-xs-12 col-sm-12"><p>Vivamus feugiat feugiat urna. Vivamus tincidunt viverra eros, at luctus tortor semper sed. Fusce varius magna ut erat pretium, at ullamcorper dui dapibus. Quisque at metus sodales, posuere ligula ac, sagittis risus.</p></div>
                  <div class="col-xs-12 col-sm-2 col-sm-offset-5">
                    <img src="assets/images/ladydev.png" alt="cliente">
                  </div>
                  <div class="col-xs-12 col-sm-12">
                    <h3>Cliente</h3>
                  </div>
              </div>

          </div>
          
           <ol class="carousel-indicators">
              <li data-target="#depoimento_banner" data-slide-to="0" class="active"></li>
              <li data-target="#depoimento_banner" data-slide-to="1" class=""></li>
              <li data-target="#depoimento_banner" data-slide-to="2" class=""></li>
            </ol>
         </div>

      </div>
    </div>
  </div>
</section>

<section id="monte-seu-cesto">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <h1>Monte seu Cesto!</h1>
      </div>
      <div class="col-xs-12 col-sm-4 col-sm-offset-4">
        <hr/>
      </div>
      <div class="col-xs-12 col-sm-12">
        <p>Faça uma simulação do que você precisa lavar, sem compromisso</p>
      </div>
      <div class="clearfix"></div>
      <div class="col-xs-12 col-sm-3">
        <img class="speak" src="assets/images/ladydev.png"/>
      </div>
      <div class="col-xs-12 col-sm-9">
        <div class="message">
          <h4>Olá, Tudo bem?</h4>
          <p>
            Sou Ricardo, um dos clientes da Clean Express!<br/>
            Sempre tive problema para cuidar das minhas camisas sociais, mas nunca tinha testado o serviço de lavanderias tradicionais porque nunca achei prático ter que levar e buscas as roupas na lavanderia.
         </p>
         <p>
            Resumindo, eu acabei comprando um dos cestos de teste da Clean Express, mas você também pode montar um cesto do seu jeito ou pedir ajuda para escolher.
          </p>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="col-xs-12 col-sm-4">
        <div class="mod_info">
          <img src="assets/images/clothe.jpg" alt="imagem"/>
          <h3>Nunca usou lavanderias?</h3>
          <p>Nós montamos cesto com condições especiais para você testar nosso serviço</p>
          <button class="btn btn-primary">Ver Cestos</button>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="mod_info">
          <img src="assets/images/machine.jpg" alt="imagem"/>
          <h3>Já é cliente de lavanderia?</h3>
          <p>Use nosso simulador, compare os preços e confira as vantagens de lavar com a Clean Express</p>
          <button class="btn btn-primary">Montar meu cesto</button>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="mod_info">
          <img src="assets/images/feet.jpg" alt="imagem"/>
          <h3>Não tem muita experiência</h3>
          <p>Nós conhecemos os perfis dos nossos clientes e podemos te ajudar a escolher!</p>
          <button class="btn btn-primary">Ver ajuda</button>
        </div>
      </div>
      
    </div>
  </div>
</section>

<section id="newsletter">
  <div class="container">
    <div class="row">
      <form method="post" action="cadasto.php">
        <div class="col-xs-12 col-sm-6">
          <h2>Assine nossa newsletter</h2>
          <p>Fique por dentro das promoções e notícias</p>
        </div>
        <div class="col-xs-12 col-sm-4"> 
           <input type="email" placeholder="Digite seu Email" /> 
        </div>
        <div class="col-xs-12 col-sm-2">
          <input type="submit" value="Assinar" class="btn btn-primary" />
        </div>
      </form>
    </div>
  </div>
</section>

<section id="footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <h1>CLEAN <span>express</span></h1>
        <p>Ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Ab illo inventore veritatis et quasi architecto. Ab illo inventore veritatis et quasi architecto. Ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
Ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
      <div class="col-xs-12 col-sm-8">
       
        <form method="post" action="footer_contact">
          <h3>Entre em contato</h3>
          <div class="row">
            <div class="col-xs-12 col-sm-12"><input type="text" name="nome" placeholder="Nome"/></div>
            <div class="col-xs-12 col-sm-6"><input type="text" name="telefone" placeholder="Telefone"/></div>
            <div class="col-xs-12 col-sm-6"><input type="email" name="email" placeholder="Email"/></div>
            <div class="col-xs-12 col-sm-12"><textarea name="mensagem" placeholder="Digite o sua mensagem"></textarea></div>
            <div class="col-xs-12 col-sm-4 col-sm-offset-8"><input type="submit" class="btn btn-primary" value="Enviar" /></div>
          </div>
        </form>

      </div>
      <div class="clearfix"></div>
      <div class="col-xs-12 col-sm-4 footer_bottom">
        <h3>Institucional</h3>
        <hr/>
        <ul>
          <li><a href="#"> > Sobre</a></li>
          <li><a href="#"> > Blog</a></li>
          <li><a href="#"> > FAQ</a></li>
          <li><a href="#"> > RH & Lecenciados</a></li>
          <li><a href="#"> > Termos de uso</a></li>
          <li><a href="#"> > Política de privacidade</a></li>
        </ul>
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 footer_bottom">
        <h3>Nossas lojas físicas</h3>
        <hr/>
        <p>
          Atendimento:<br/>
          Segunda a sexta - 8h às 18h.<br/>
          Sábado - 9h às 13h.
        </p>
        <ol>
          <li>Clean Express Guarulhos - (11) 2656-4866</li>
          <li>Clean Express Jardins - (11) 3052-2019</li>
          <li>Clean Express Moema - (11) 3459-1606</li>
          <li>Clean Express Granja Viana - (11) 3459-1607</li>
          <li>Clean Express Diadema- (11) 2668-0005</li>
        </ol>      
      </div>

      <div class="col-xs-12 col-sm-4 footer_bottom">
        <h3>Parceiros</h3>  
        <hr/>
        <p><strong>Tecnologia da informação</strong></p>
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <img src="assets/images/logo-pagseguro.png" alt="logo"/>
          </div>
          <div class="col-xs-12 col-sm-6">
            <img src="assets/images/logo-microsoft.png" alt="logo"/>
          </div>
        </div>
        <p><strong>Tecnologia de Processos</strong></p>
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <img src="assets/images/logo-pagseguro.png" alt="logo"/>
          </div>
        </div>
        <p><strong>Negócios</strong></p>
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <img src="assets/images/logo-microsoft.png" alt="logo"/>
          </div>
        </div>
        <p><strong>Segurança</strong></p>
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <img src="assets/images/logo-pagseguro.png" alt="logo"/>
          </div>
          <div class="col-xs-12 col-sm-6">
            <img src="assets/images/logo-microsoft.png" alt="logo"/>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




@endsection
