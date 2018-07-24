<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Tony Veiculos</title>
    <?php
      $mysqli = new mysqli("localhost","root","","clientes");
      $res = mysqli_query($mysqli, "SELECT * FROM cliente");
    ?>
  </head>
  <body>
    <section>
      <div class="container">
        <table id="tabela_cliente">
          <tr>
          <th>ID</th>
          <th>NOME</th>
          <th>E-MAIL</th>
          </tr>
           <?php while($escrever = mysqli_fetch_array($res)){
                echo "<tr>
                  <td>".$escrever['id']."</td>
                  <td>".$escrever['nome']."</td>
                  <td>".$escrever['email']."</td>
                      </tr>";
            }
            mysqli_close($mysqli);
          ?>
        </table>
      </div>
    </section>
  </body>
</html>
