<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">

    <title>TayToy-Concessionária</title>

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <link rel="stylesheet" href="css/jquery.fancybox.css">

    <link rel="stylesheet" href="css/owl.carousel.css">
    
    <link rel="stylesheet" href="css/Style.css">

    <link rel="stylesheet" href="css/et-icons.css">
    
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  
</head>
<body>
    <header id="navegacao" class="navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Pargina de Navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <a href="#"><img class="imglogo" src=img/logo/taytoy_bco.png alt="Logo" width="120" height="50"></a>
                </div>
            </div>
            <nav class="collapse navegacao navbar-collapse navbar-right" role="navegacao">
                <ul id="nav" class="nav navbar-nav">
                    <li class="current"><a href="#home" title="Página Inicial">Home</a></li>
                    <li><a href="#" title="Missão, Visão e Sobre Nós." current>A Empresa</a></li>
                    <li><a href="#" title="Midia" current>Mídia</a></li>
                    <li><a href="#servicos" title="Serviços" current>Serviços</a></li>
                    <li><a href="#ofertas" title="Equipe" current>Ofertas</a></li>
                    <li class="admin"><a href="#" data-toggle="modal" data-target="#modal1" class="btn-blue">ADMIN</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="home">
        <div id="home-carousel" class="carousel slide" data-auto-play="true" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home-carousel" data-slide-to="1"></li>
                <li data-target="#home-carousel" data-slide-to="2"></li>
                <li data-target="#home-carousel" data-slide-to="3"></li>
                <li data-target="#home-carousel" data-slide-to="4"></li>
                <li data-target="#home-carousel" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active img" style="background-image: url('img/slider/slide-home-fundo-02.png')">
                    <div class="animated bounceInRight">
                       
                    </div>
                </div>              
                <div class="item" style="background-image: url('img/slider/1-fiat-slide.png')">                
                    <div class="carousel-caption">
                    </div>
                </div>

                <div class="item" style="background-image: url('img/slider/2-chevrolet-slide.png')">
                    </div>
                </div>
                <div class="item" style="background-image: url('img/slider/3-ford-slide.png')">                 
                </div>
                <div class="item" style="background-image: url('img/slider/4-toyota-slide.png')">                 
                </div>
                <div class="item" style="background-image: url('img/slider/5-volkswagen-slide.png')">                 
                    </div>
                </div>
            </div>
            <!--/.carousel-inner-->
            <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                <a class="sl-prev hidden-xs" href="#home-carousel" data-slide="prev">
                    <i class="fa fa-angle-left fa-3x"></i>
                </a>
                <a class="sl-next" href="#home-carousel" data-slide="next">
                    <i class="fa fa-angle-right fa-3x"></i>
                </a>
            </nav>
        </div>
    </section>
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content modal-popup">
                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                <img id="profile-img" class="profile-img-card" src="img/icons/avatar_2x.png" />
                <form method="post" class="popup-form">
                    <input type="email" class="form-control" id="nome" placeholder="Email" required>

                    <input type="password" class="form-control" id="senha" placeholder="Senha" required>

                    <button type="submit" class="butao">Entrar</button>
                </form>
            </div>
        </div>
    </div>
    <section id="servicos" class="section section-padded">
        <div class="container">
            <div class="row text-center">
                <h2 class="txtserv">Serviços</h2>
            </div>
            <div class="row servicos">
                <div class="col-md-4">
                    <div class="servico">
                        <div class="icon-holder">
                            <img src="img/icons/carro.png" alt="" class="icon">
                        </div>
                        <h4 class="heading">Atendimento ao cliente</h4>
                        <h5 class="description">Toda atenção que nossos clientes merecem</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="servico">
                        <div class="icon-holder">
                            <img src="img/icons/carro-chave.png" alt="" class="icon">
                        </div>
                        <h4 class="heading">Carros Novos e Seminovos</h4>
                        <h5 class="description">Carros novos e seminovos para seu conforto no dia dia</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="servico">
                        <div class="icon-holder">
                            <img src="img/icons/carro.png" alt="" class="icon">
                        </div>
                        <h4 class="heading">Qualidade do Automóvel</h4>
                        <h5 class="description">Segurança Máxima Voltada ao Bem-Estar do Cliente</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ofertas">
        <div class="container">
        <h2 class="txtserv text-center">Ofertas</h2>
        <h4 class="text-center">Carros Novos e Seminovos</h4>
        <br>
         <div class="btn-group btn-group-justified">
     <a type="button" href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Carros Novos</a>
     <a type="button" href="#" class="btn btn-primary">Carros Usados</a>
     <a type="button" href="#" class="btn btn-primary">Carros para Alugar</a>
     </div>
        </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Carros Novos</h4>
        </div>
        <div class="modal-body">
            <h4 class="txtserv text-center">Fiat Strada</h4>
            <center><img src="img/galeria/Fiat-car.png" width="300"></center>
            <h6 class="txtserv">Descrição:</h6><span></span>
            <p>Fiat e escolha o que mais tem a ver com você. Segurança, conforto e espaço interno.</p>
            <h6 class="txtserv" >Preço: <span>R$75.710,00</span></h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Comprar</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
    </section>
</body>
<!-- main jQuery -->
<script src="js/vendor/jquery-1.11.1.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- jquery.nav -->
<script src="js/jquery.nav.js"></script>
<!-- Fancybox -->
<script src="js/jquery.fancybox.pack.js"></script>

<script src="js/jquery.parallax-1.1.3.js"></script>

<script src="js/jquery.appear.js"></script>

<script src="js/jquery-countTo.js"></script>

<script src="js/owl.carousel.min.js"></script>

<script src="js/wow.min.js"></script>

<script src="js/main.js"></script>
<!-- Tela de Poupup -->
<script src="js/pargina.js"></script>

<script src="js/jquery.cslider.js"></script>

<script src="js/typewriter.js"></script>
</body>
</html>
