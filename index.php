<!DOCTYPE html>
<meta charset="utf-8">
<head>
    <title></title>
    <link rel="stylesheet" href="../concessionaria/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../concessionaria/style.css">
</head>">
<body>
    
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#" >TayToy-Concessionária</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Serviços <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Quem Somos?</a></li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carros <span class="caret"></span></a> 
          <ul class="dropdown-menu">
              <a href="#" class="glyphicon glyphicon-shopping-cart"></a>
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
         
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown">
         <li><a href="#">Parceiros</a></li>
        </li>
         <li><a href="#">Admin</a></li>
         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <section class="form">
        <form method="POST" action="#">
            <label> Login: </label>
            <input type="email" id="tx_nome" name="tx_nome"  placeholder="Digite seu e-mail" required />
            <br/>
            <br/>
            <label> Senha: </label>
            <input type="text" id="tx_nome2" name="tx_nome2" value="" placeholder="Digite sua Senha" required />
            <br/>
            <br/>
            <input type="submit" value="Enviar" name="enviar" class="btn btn-primary" />
        </form>
    </section>
    
</body>
</html>