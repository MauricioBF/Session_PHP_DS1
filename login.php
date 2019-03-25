<?php
    // Define o limite de tempo do cache em 5 minutos
    session_cache_expire(5);
    $cache_expire = session_cache_expire();

    //  Inicia a sessao
    session_start();
    if(isset($_SESSION['nome'])){
        echo "Ja esta registado como $_SESSION[nome].";
        echo "</br>";
    }
    else if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $trimusuario = trim($_POST['nome']);
        $trimemail = trim($_POST['email']);
        if(!empty($trimusuario) && !empty($trimemail)){
            $unome = $_POST['nome'];
            $uemail = $_POST['email'];
    //criar variaveis na session
            $_SESSION['nome'] = $unome;
            $_SESSION['email'] = $uemail;
            setcookie("user", $_SESSION['nome'],  time() + (60), "/"); 
            setcookie("end", $_SESSION['email'],  time() + (60), "/"); 
            echo "Obrigado por se registar! <br />",
                "Usuario: $unome <br />",
                "Email: $uemail <br />";
        }
    }
    else {
        echo "Por favor preencha ambos os campos! <br />";
    }
    header('Location: upload.html');
?>