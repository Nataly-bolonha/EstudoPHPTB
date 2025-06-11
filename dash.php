<?php

session_start();
if(!isset($_SESSION['login'])){

}






?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbosrd</title>
    <link rel ="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
</head>
<body>
    <div class=" container mt-2">
        <div class=" row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <div class=" alert alert-seccess">
                    <h4 class=" text-center">
                        Dashbosrd do sistema
                    </h4>
                   
                 <a  href= "response.php"class="btn btn-outline-info btn-block mt-4 mb-4">Acessar!</a>
                 <a  href= "logout.php"class="btn btn-outline-info btn-block mt-4 mb-4">!</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>