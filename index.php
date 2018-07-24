<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Tony Veiculos</title>
  </head>
  <body>
    <header>
      <div class="container logo">
          <img src="images/tonylogo.png" width="200px" height="100px" alt="Tony Veículos">
      </div>
    </header>
    <section>
       <div id="banner">
         <div class="container">
          <div class="pull-left cadastro">
             <form action="php/conexao.php" method="post">
                 <h3>Solicite já o seu</h3>
                 <input type="text" name="name" placeholder=" Seu nome" id="nome" required>
                 <input type="email" name="email" placeholder=" Seu e-mail" id="email" required>
                 <input type="submit" value="Enviar" id="botao">
            </form>
          </div>
           <div class="pull-right logo-carro">
           <img src="images/hb20.png" width="550px" height="300px" alt="HB20">
           </div>
        </div>
        <div class="container">
            <h1>Novo HB20</h1>
            <hr>
            <p>Você vai ser apaixonar pelo novo HB20, <b>confortável</b>, <b>moderno</b>, com o melhor <b>custo benefício</b>
              e encontrará apenas na Tony Veículos.</p>
            <p>Entrada de <b class="preco"> 4599</b><b>,00</b> + 48x <b class="preco">199</b><b>,00</b></p>
        </div>
       </div>
       <div id="outros_carros">
         <div class="container">
           <h4>Outras cores</h4>
           <div class="col-md-3 carros-cores">
             <img src="images/hb20_prata.png" width="170px" height="100px" alt="HB20 prata">
             <p>Prata</p>
           </div>
           <div class="col-md-3 carros-cores">
             <img src="images/hb20_azul.png" width="200px" height="100px" alt="HB20 azul">
             <p>Azul Sky</p>
           </div>
           <div class="col-md-3 carros-cores">
             <img src="images/hb20_preto.jpg" width="150px" height="100px" alt="HB20 preto">
             <p>Preto</p>
           </div>
           <div class="col-md-3 carros-cores">
             <img src="images/hb20_vermelho.png" width="150px" height="100px" alt="HB20 preto">
             <p>Vermelho</p>
           </div>
         </div>
      </div>
    </section>
    <footer>
        <div class="container">
            <div class="col-md-6">
              <img src="images/tonylogo.png" width="200px" height="100px" alt="Tony Veículos">
            </div>
            <div class="col-md-6 redes-sociais">
              <h1>REDES SOCIAIS</h1>
              <ul>
                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></i></a></li>
                <li><a href="#"><i class="fas fa-envelope-square"></i></a></li>
              </ul>
            </div>
          <div class="col-md-12">
            <div class="container">
              <p>Tony Veículos © 2018 - Todos os direitos reservados</p>
            </div>
          </div>
        </div>
    </footer>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/jquery-3.31.min.js"></script>
  </body>
</html>
