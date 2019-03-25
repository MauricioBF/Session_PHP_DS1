<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My page</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Tamanho</th>
        </tr>
        <?php
            $directory = 'uploads/';
            $file = scandir($directory, 1);
            for($cont=0; $cont<2; $cont++){
                array_pop($file);
            }
            for($c=0; $c < count($file); $c++){
                $arquivo = $file[$c];
                $local = 'uploads/'.$arquivo;
                echo "<tr><td>".$arquivo."</td><td>".filesize($local)." bytes</td></tr>";
            }
        ?>
    </table>
    <br>
    <a href="pdf.php">Baixar arquivo PDF</a>
    <a href="logout.php">Fazer logout</a>
</body>
</html>