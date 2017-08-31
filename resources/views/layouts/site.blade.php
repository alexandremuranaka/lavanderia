<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">


<title>Clean Express</title>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/prettyPhoto.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/clean_express.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
<!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
<!-- <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<script defer src="assets/js/bootstrap.min.js"></script>
<script defer src="assets/js/jquery.prettyPhoto.js"></script>
<script defer src="assets/js/jquery.animateNumber.min.js"></script>
<script defer src="assets/js/wow.min.js"></script>
<script defer src="assets/js/jquery.mask.min.js"></script>
<script defer src="assets/js/clean_express.js"></script>
</head>
<body>


<section id="topo">
  <div id="menu" class="container">
    <div class="row">
      <div class="col-xs-9 col-sm-3">
        <a href="index.php"><img src="assets/images/logo.png" alt="logo Clean Express"></a>
      </div>

      <div class="col-xs-3">
        <button class="btn_menu"><i class="fa fa-bars"></i></button>
      </div>

      <div class="col-xs-12 col-sm-9">
        <ul class="main_menu">
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Como Funciona</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="login.php">Área do Cliente</a></li>
            @if( isset($homepage))
              <li class="action btn_montar_cesto">Monte seu Cesto</li>
            @else
              <li><a href="/home#monte-seu-cesto">Monte seu Cesto</a></li>
            @endif
        </ul>
      </div>
    </div>
  </div>

 <div class="container-fluid">
    <div class="row">
      <div class="mobile_menu">
        <ul>
           @if( isset($homepage))
              <li class="action btn_montar_cesto">Monte seu Cesto</li>
            @else
              <li><a href="index.php#monte-seu-cesto">Monte seu Cesto</a></li>
            @endif
        </ul>

      </div>
    </div>
  </div>
</section>

<div class="over_bg"></div>
<div class="clearfix"></div>

@yield('content')
   

<section id="creditos">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
      <p class="text-left">Todos Direitos Reservados &copy; Clean Express</p>
      </div>
      <div class="col-xs-12 col-sm-6">
      <p class="text-right">Powered by <a href="http://www.toyacom.com.br" target="_blank"> Toyacom</a></p>
      </div>
    </div>
  </div>
</section>
</body>
</html>