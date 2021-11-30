<?php

 include('conexao.php');

?>

<html>

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <link href="cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body>

        <a href="formulariocliente.php">Cadastrar Cliente</a>
        <a href="index.php">Menu Principal</a>
        <hr>

    <div class="container">

    <!-- Inicio da tabela -->

    <table class="table">

  <thead>

    <tr>

      <th scope="col">#</th>
      <th scope="col">foto</th>
      <th scope="col">cliente</th>
      <th scope="col">datadenac</th>
      <th scope="col">cpf</th>
      <th scope="col">email</th>
      <th scope="col">Ações</th>

    </tr>

  </thead>

  <tbody>



  <?php

   

        $sql = "select * from tblcliente";

        $resultado = $connect->query($sql);



        while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
          
            echo "<tr>";

                echo "<th>".$linha['idcliente']."</th>";
                echo "<td><img src='".$linha["foto"]."' width='50px' height='65px'></td>";
                echo "<td>".$linha['cliente']."</td>";
                echo "<td>".$linha['email']."</td>";
                
                echo "<td>
                    <button class='btn btn-primary btn-sm'>Editar</button> 
                    <button class='btn btn-danger btn-sm'>Excluir</button> 
                </td>";
            echo "</tr>";

                    

        }

?>



   

   

  </tbody>

</table>



</div>