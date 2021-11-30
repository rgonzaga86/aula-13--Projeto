<?php

 include('conexao.php');

?>

<html>

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <link href="cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body>

        <a href="formularioproduto.php">Cadastrar Produto</a>
        <a href="index.php ">Menu Principal</a>
        <hr>

    <div class="container">

    <!-- Inicio da tabela -->

    <table class="table">

  <thead>

    <tr>

        <th scope="col">#</th>
        <th scope="col">foto</th>
        <th scope="col">produto</th>
        <th scope="col">preco</th>
        <th scope="col">estoque</th>

    </tr>

  </thead>

  <tbody>



  <?php

   

        $sql = "select * from tblprodutos";

        $resultado = $connect->query($sql);



        while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){

                

            echo "<tr>";

                echo "<th>".$linha['idproduto']."</th>";
                echo "<td><img src='".$linha["fotos"]."' width='50px' height='65px'></td>";
                echo "<td>".$linha['Produto']."</td>";
                echo "<td>".$linha['Preco']."</td>";
                echo "<td>".$linha['Estoque']."</td>";
                

                echo "<td>

                    <button class='btn btn-primary btn-sm'> Editar</button> 

                    <button class='btn btn-danger btn-sm'>Excluir</button> 

                </td>";

            echo "</tr>";

                    

        }

?>



   

   

  </tbody>

</table>



</div>