<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">

    <title>Login</title>
</head>
<body>

    <?php


        if (!isset($_SESSION['login'])){
            if(isset($_POST['acao'])){
                $login = 'paulo';
                $senha = '123456'; 
                $loginForm = $_POST['username'];
                $senhaForm = $_POST['password'];               

                if($login == $loginForm && $senha == $senhaForm){
                    $_SESSION['login'] = true;
                    header('Location: index.php');
                }else{
                    echo "Dados invalidos";
                }
            }
                include('templates/index.html');
        }else{
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
            include('templates/matricula.html');
        }
    ?>
</body>
</html>

