<html>
<head>
    <title> Ejercicio 5 </title>
    <meta charset="utf-8">
    </head>
    <body style="background:url('u.png') no-repeat bottom left" width=80% bgcolor="white" border="2">
    <h1> PROGRAMACION DE APLICACIONES WEB</h1>
    <h4> Mostrar en pantalla cual es el mayor de los tres numeros</h4>
    <?php
    $n1=54;
    $n2=10;
    $n3=36;
    
    if ($n1>$n2){
        echo "El primer numero (".$n1.") es mayor que el segundo numero (".$n2.") y el primer numero es mayor que el tercer numero(".$n3.")";
    }
    else if ($n1==$n2){
        echo "El segundo numero (".$n2.") es igual que el tercer numero (".$n2.") tanto el primer numero como el segundo son iguales al tercer numero (".$n3.")";
    }
    else{
        echo "El primer numero (".$n1.") es menor que el segundo numero (".$n2.") y el tercer numero es menor que el segundo numero (".$n3.")";
    }
    
        ?>
        <p> Wiliam De Jesus Guillen Cruz </p>
        <a href="index.php">Regresar al menu</a>
    </body>
    </html>