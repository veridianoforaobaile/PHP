<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
    <style>
        .verde{
            background-color: lightgreen;
        }

        .amarelo{
            background-color:cyan;
        }
        </style>
</head>
<body>
    <?php

    $valor = $_POST["valor"];
    $nome = $_NOME["nome"]

     for($x=1;$x<=10;$x++)
     {
        if($x%2 == 0)
        {
        echo("<div class='amarelo'>");
        }
        else
        {
        echo("<div class='verde'>");
        }
        echo(5*$x);
        echo("</div> <br>");
     }
     $nome = "Maicol do SENAI";
     $resultado = (2+1) * 5;

     echo("
     <br><br>
     Exemplo do arquivo PHP
     <br>
     O calculo de $resultado
     <br>
     Meu nome é $nome
     ");

    ?>
</body>
</html>