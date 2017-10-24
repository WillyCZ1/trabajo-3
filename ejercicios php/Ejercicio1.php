<html>
<head>
    <title> Ejercicio 1</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"href="style.css"/>
    </head>
    <body style="background:url('suma.jpg') no-repeat bottom left" width=80% bgcolor="white" border="2">
    <h1> PROGRAMACION DE APLICACIONES WEB</h1>
    <h4> Hacer un programa que sume,reste,multiplique y divida dos variables.</h4>
    <?php
    $numero1=10;
    $numero2=12;
    //SUMAR
    $suma=$numero1+$numero2;
    echo "$numero1+$numero2"."<br>";
    echo "suma =".$suma."<br>";
    //RESTAR
    $suma=$numero1-$numero2;
    echo "$numero1-$numero2"."<br>";
    echo "resta =".$suma."<br>";
    //MULTIPLICAR
    $suma=$numero1*$numero2;
    echo "$numero1*$numero2"."<br>";
    echo "multiplicar =".$suma."<br>";
    //Dividir
    $suma=$numero1 % $numero2;
    echo "$numero1 % $numero2"."<br>";
    echo "dividir =".$suma."<br>";
    ?>
    <p>Wiliam De Jesus Guillen Cruz</p>
    <a href="index.php">Regresar al menu</a>
    </body>
    </html>
    