<?php
    session_start();
    session_unset();
    unset($_COOKIE["user"]);
    unset($_COOKIE["email"]);
    setcookie("user", null, -1, "/");
    setcookie("end", null, -1, "/");
    setcookie("status", true, time() + 5, "/");
    $dir = "uploads";
    $file = scandir($dir, 1);
    for ($cont=0; $cont < 2; $cont++) { 
        array_pop($file);
    }
    for ($cont=0; $cont < count($file); $cont++) {
        unlink("uploads/".$file[$cont]);
    }
    session_destroy();
    header('Location: index.html');
?>