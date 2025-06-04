<?php

if($_POST['nome'] == "admin" && $_POST['senha'] == "senha"){
    session_start();
    $_SESSION['nome'] = $_POST['nome'];
} else {
   echo "<script>alert('Login não foi efetuado com sucesso.') </script>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <div class="alert alert-info">
                    <h3 class="text-center text-dark">
                        <?php
                        echo "Seja bem vindo ao sistema ". $_SESSION['nome'];

                        ?>
                    </h3>
                    <button class="btn btn-outline-info btn-block mt-4 mb-4">Acessar!</button>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>