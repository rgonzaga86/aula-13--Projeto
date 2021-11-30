<?php
       $cliente = isset($_GET["cliente"]) ? $_POST["cliente"] :null;
    include('conexao.php');
    try {
      $sql = "insert into tblclientes (cliente,datadenasc,telefone,email,) values (:cliente,:email, :datadenasc, :telefone, :email)";
      $stmt = $connect->prepare($sql);

      $stmt->bindValue(":cliente",$_POST["cliente"]);
      $stmt->bindValue(":datadenasc",$_POST["date"]);
      $stmt->bindValue(":telefone",$_POST["telefone"]);
      $stmt->bindValue(":email",$_POST["email"]);
      $stmt->execute();
      header("location:listarcliente-prepare.php");
    } catch(PDOException $e){
        echo "Cliente não Cadastrado. ".$e->getmessage();
    }
?>


<html>

    <head>

        <title>Loja Virtual</title>

        <meta charset="utf-8">

      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head> 



    <body>

        <div class="container">

         <form>

            <div class="row">

               

              <div class="col">

                <div class="mb-3">

                    <label for="exampleInputEmail1" class="form-label">Cliente</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <label for="exampleInputEmail1" class="form-label">Data de Nasc</label>
                    <input type="Date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">     
                    <label for="exampleInputEmail1" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
                      
                    </div>

                  </div>


              </div>      
              <div class="col">
<div class="mb-3">
   

  </div>
                        
           

            <div class="mb-3 form-check">

                <input type="checkbox" class="form-check-input" id="exampleCheck1">

                <label class="form-check-label" for="exampleCheck1">Check me out</label>

              </div>

  

              <button type="submit" class="btn btn-primary">Cadastrar</button>
              <a class="btn btn-primary" href="index.php" role="button">Menu Principal</a>
              <body>
  
        
        </form>

    </div>

    </div>

    <script src="cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

        <script src="cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bo

</html>