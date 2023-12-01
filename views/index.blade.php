<!doctype html>
<html lang="pt-br">
  <head>

    <title>Magic Touch</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome-->
    <!--load all Font Awesome styles -->
  <link href="assets/bootstrap/font/fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/estilo.css">

  </head>

  <body>

    <header> <!--Inicio cabeçalho-->


        <nav class="navbar navbar-dark bg-dark navbar-expand-sm">


              <!-- Logo -->

              <a class="navbar-brand me-5 text-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-ev-front" viewBox="0 0 16 16">
                  <path d="M9.354 4.243a.188.188 0 0 0-.085-.218.186.186 0 0 0-.23.034L6.051 7.246a.188.188 0 0 0 .136.316h1.241l-.673 2.195a.188.188 0 0 0 .085.218c.075.043.17.03.23-.034l2.88-3.187a.188.188 0 0 0-.137-.316H8.572z"/>
                  <path d="M4.819 2A2.5 2.5 0 0 0 2.52 3.515l-.792 1.848a.807.807 0 0 1-.38.404c-.5.25-.855.715-.965 1.262L.05 8.708a2.5 2.5 0 0 0-.049.49v.413c0 .814.39 1.543 1 1.997V13.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1.338c1.292.048 2.745.088 4 .088s2.708-.04 4-.088V13.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1.892c.61-.454 1-1.183 1-1.997v-.413c0-.165-.016-.329-.049-.49l-.335-1.68a1.807 1.807 0 0 0-.964-1.261.807.807 0 0 1-.381-.404l-.792-1.848A2.5 2.5 0 0 0 11.181 2H4.82ZM3.44 3.91A1.5 1.5 0 0 1 4.82 3h6.362a1.5 1.5 0 0 1 1.379.91l.792 1.847a1.8 1.8 0 0 0 .853.904c.222.112.381.32.43.564l.336 1.679c.02.097.029.195.029.294v.413a1.48 1.48 0 0 1-1.408 1.484c-1.555.07-3.786.155-5.592.155-1.806 0-4.037-.084-5.592-.155A1.479 1.479 0 0 1 1 9.611v-.413c0-.099.01-.197.03-.294l.335-1.68a.807.807 0 0 1 .43-.563c.383-.19.685-.511.853-.904l.792-1.848Z"/>
                </svg>

                 </a>
                   <h1 class="d-inline-block text-light">Magic Touch</h1>

              <!-- Menu Hamburguer para dispositivos com telas pequenas (Small) -->
              <button class="navbar-toggler navbar-dark" data-toggle="collapse" data-target="#navegacao">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <!-- navegacao () -->
              <div class= "collapse navbar-collapse justify-content-end" id="navegacao">
                  <ul class="navbar-nav ml-5">
                      <li class="nav-item mr-2">
                          <a href="#home" class="nav-link" style="color: white;">Home</a>
                      </li>
                      <li class="nav-item mr-2">
                          <a href="#servicos" class="nav-link" style="color: white;">Serviços</a>
                      </li>
                      <li class="nav-item mr-2">
                          <a href="#orcamentos" class="nav-link" style="color: white;">Orçamento</a>
                      </li>
                    <li class="nav-item mr-2">
                      <a href="#contato" class="nav-link" style="color: white;">Contato</a>
                  </li>

                  </ul>
              </div>
         </nav> <!--Fim cabeçalho-->

    </header>

    <section id="home" class="d-flex" style="padding-top: 10px;"><!--home -->
      <div class="container align-self-center"><!--container -->
        <div class="row"><!--row -->
          <div class="col-md-12 capa">


          <div id="carousel-legenda" class="carousel slide" data-ride="carousel"><!--Carousel -->

            <!-- Indicadores -->
            <ol class="carousel-indicators">

              <li class="active" data-target="#carousel-legenda" data-slide-to="0"></li>

              <li data-target="#carousel-legenda" data-slide-to="1"></li>

              <li data-target="#carousel-legenda" data-slide-to="2"></li>

              <li data-target="#carousel-legenda" data-slide-to="3"></li>

              <li data-target="#carousel-legenda" data-slide-to="4"></li>

            </ol>

            <div class="carousel-inner"><!--Inner -->

              <div class="carousel-item active">
                <img src="assets/bootstrap/img/1.jpg" alt="" class="img-fluid">
                <div class="carousel-caption"></div>
              </div>

              <div class="carousel-item">
                <img src="assets/bootstrap/img/2.jpg" alt="" class="img-fluid">
                <div class="carousel-caption"></div>
              </div>

              <div class="carousel-item">
                <img src="assets/bootstrap/img/3.jpg" alt="" class="img-fluid">
                <div class="carousel-caption"></div>
            </div>

            <div class="carousel-item">
              <img src="assets/bootstrap/img/4.jpg" alt="" class="img-fluid">
              <div class="carousel-caption"></div>
            </div>

            <div class="carousel-item">
              <img src="assets/bootstrap/img/5.jpg" alt="" class="img-fluid">
              <div class="carousel-caption"></div>
            </div>

            </div><!--/Inner -->

            <!-- Controles -->
            <a href="#carousel-legenda" class="carousel-control-prev" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>

            <a href="#carousel-legenda" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

          </div><!--/Carousel -->

          </div>
        </div><!--/row -->
      </div><!--/container -->
    </section><!--/home -->

    @extends('templates.template')

@section('content')

    <div class="text-center mt-3 mb-4">
        <a href="{{url('books/create')}}">
            <button class="btn btn-success">Clique aqui para participar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead class="dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cidade</th>
                <th scope="col">Modelo</th>
                <th scope="col">Ano do Veículo</th>
                <th scope="col">Quilometragem</th>
                <th scope="col">Cor</th>
              </tr>
            </thead>
            <tbody>

            @foreach ($book as $books)
              @php
                 //$books->find($id);
              @endphp
              <tr>
                <td scope="row">{{$books->id}}</td>
                <td>{{$books->name}}</td>
                <td>{{$books->email}}</td>
                <td>{{$books->fone}}</td>
                <td>{{$books->cidade}}</td>
                <td>{{$books->marca}}</td>
                <td>{{$books->ano_veiculo}}</td>
                <td>{{$books->km}}</td>
                <td>{{$books->cor}}</td>


                <td>
                    <a href="{{url("books/$books->id")}}">
                        <button class="btn btn-dark">Visualizar</button>
                    </a>

                    <a href="{{url("books/$books->id/edit")}}">
                        <button class="btn btn-primary">Editar</button>
                    </a>

                    <form action="{{url("books/$books->id")}}" method="post" style="display: inline;" onsubmit="return confirm('Tem certeza que deseja deletar este participante?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>

                </td>
              </tr>

            @endforeach
            </tbody>

          </table>
    </div>

@endsection

    <section id="servicos" style="padding-top: 30px;">

      <!--/Início seção serviços -->
      <div class="container"><!--container -->
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h1 class="display">Serviços Oferecidos</h1>
               <p class="h2">Polimento técnico</p>
               <p class="h2">Vitrificação</p>
               <p class="h2">Revitalização de farol</p>
               <p class="h2">Higienização interna</p>
               <p class=" h2">Martelinho de ouro</p>

            </div>
          </div>
          <div class="col-md-6">
            <img src="assets/bootstrap/img/servicos.jpg" alt="carro branco" class="img-fluid">
          </div>
        </div>
      </div><!--/container -->
    </section><!--/FIM seção servicos -->


    <section id="orcamentos" style="margin: 50px;">
        <div class="container align-self-center"><!--container -->

            <div class="col-md-12 border border-dark">
              <h2 class="text-center" style="padding-top: 10px;">Promoção Lavagem Completa do seu Veículo</h2>
            </div>



        </div>
        </section>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPcDBe5u5n5dN6L4GQ/x9QhJ4u1fnhvu6Z" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></script>

  </body>
</html>
