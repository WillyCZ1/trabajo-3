<html>
<head>
    <title> Ejercicio 4 </title>
    <meta charset="utf-8">
    </head>
    <body style="background:url('d.png') no-repeat bottom left" width=80% bgcolor="white" border="2">
    <h1> PROGRAMACION DE APLICACIONES WEB</h1>
    <h4> Mostrar en pantalla cual es el numero mayor</h4>
    <?php
    $n1=54;
    $n2=10;
    
    if ($n1>$n2){
        echo "El primer numero (".$n1.") es mayor que el segundo numero (".$n2.")";
    }
    else if ($n1==$n2){
        echo "El primer numero (".$n1.") es igual que el segundo numero (".$n2.")";
    }
    else{
        echo "El primer numero (".$n1.") es menor que el segundo numero (".$n2.")";
    }
        ?>
        <p> Wiliam De Jesus Guillen Cruz </p>
        <a href="index.php">Regresar al menu</a>
    </body>
    </html>