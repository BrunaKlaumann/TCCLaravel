<!doctype html>
<html lang="eng">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="./manifest.json">
  <meta name="theme-color" content="#317EFB"/>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="public/css/css.css"/>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="./public/js/criaSW.js"></script>


</head>
<body>
  <!--aqui inicia o meu site-->
  <center>
  <h1 class="text-center">Kontrolle</h1>
  <hr>

  
  <!--Menu-->
   
  <nav id="MenuPrincipal" class="navbar navbar-expand-lg navbar-light bg-light">
    <div  class="container">
      <button  class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
        Menu
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li><a href="index.html" class="nav-link"> Inicial </a></li>
          <li><a href="funcionarios.html" class="nav-link"> Funcionários </a></li>
          <li><a href="produtos.html" class="nav-link"> Produtos</a></li>
          <li><a href="locacao.html" class="nav-link"> Locação</a></li>
        </ul>
      </div>
    </center>
    </div>
  </nav>
  <hr>
  <div class="container">
    <h2 class="text-center"> Produtos </h2>
    <hr>
    <div class="row listaProdutos">
      <div class="col-12 col-md-3" style="display:flex; align-items: center; min-height: 150px">
      </div>
    </div>
    <div class="col-md-7">
      <div class="row linha">
        <div class="col-md-6">
          <a href="/modulos/contasreceber/consulta.php?exibir=A&amp;intervalo=2019-09-16&amp;intervalo2=2019-09-16&amp;tipoPeriodo=day" style="text-decoration: none;">
            <div class="titlePainel">
              Contas a receber hoje
            </div>
            <div class="card card-painel">
              <div class="card-content" style="padding: 20px 0px !important;">
                <div class="row verde">
                  <div class="col-md-5 col-xs-5">
                    <i class="glyphicon glyphicon-usd divisor-vertical" style="font-size: 25px; padding: 10px 10px"></i>
                  </div>
                  <div class="col-md-7 col-xs-7 receber" style="font-size: 20px; padding-top: 10px;padding-left: 0px;">R$ 48,88</div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="/modulos/contaspagar/consulta.php?exibir=A&amp;intervalo=2019-09-16&amp;intervalo2=2019-09-16&amp;tipoPeriodo=day" style="text-decoration: none;">
            <div class="titlePainel">
              Contas a pagar hoje
            </div>
            <div class="card card-painel">
              <div class="card-content" style="padding: 20px 0px !important;">
                <div class="row vermelho">
                  <div class="col-md-5 col-xs-5">
                    <i class="glyphicon glyphicon-usd divisor-vertical" style="font-size: 25px; padding: 10px 10px"></i>
                  </div>
                  <div class="col-md-7 col-xs-7 pagar" style="font-size: 20px;padding-top: 10px;padding-left: 0px;">R$ 0,00</div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row linha">
        <div class="col-md-6">
          <a href="/modulos/contasreceber/consulta.php?exibir=V" style="text-decoration: none;">
            <div class="titlePainel">
              Contas a receber em atraso
            </div>
            <div class="card card-painel">
              <div class="card-content" style="padding: 20px 0px !important;">
                  <div class="row verde">
                      <div class="col-md-5 col-xs-5">
                          <i class="glyphicon glyphicon-usd divisor-vertical" style="font-size: 25px; padding: 10px 10px"></i>
                      </div>
                      <div class="col-md-7 col-xs-7 receberVencidos" style="font-size: 20px; padding-top: 10px;padding-left: 0px;">R$ 12.843,08</div>
                  </div>
                </div>
              </div>
          </a>
          </div>
          <div class="col-md-6">
            <a href="/modulos/contaspagar/consulta.php?exibir=V" style="text-decoration: none;">
              <div class="titlePainel">
                Contas a pagar em atraso
              </div>
              <div class="card card-painel">
                <div class="card-content" style="padding: 20px 0px !important;">
                  <div class="row vermelho">
                      <div class="col-md-5 col-xs-5">
                          <i class="glyphicon glyphicon-usd divisor-vertical" style="font-size: 25px; padding: 10px 10px"></i>
                      </div>
                      <div class="col-md-7 col-xs-7 pagarVencidos" style="font-size: 20px; padding-top: 10px;padding-left: 0px;">R$ 2.363,014</div>
                  </div>
              </div>
          </div>
          </a>
          </div>
        </div>
            <div class="row linha">
          </div>
      </div>
  </div>
  <hr>
  <footer class="bg-secondary pt-4 pb-4">
    <div class="container d-flex justify-content-between align-items-center">
      <span>
        ©2019 Direitos reservados a Bruna Klaumann
      </span>
    </div>
  </footer>
</body>
</html>
