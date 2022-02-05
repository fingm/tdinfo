
<?php

    $varBoolean = false;
    $varNombre = "Alberto";
    $salario = 50000;


    if($varBoolean){
        $varNombre = $varNombre. "es un nombre";
    }

    if ($salario < 25000){
        $respuesa = "no pago irpf";
    }elseif($salario > 25000 && $salario < 45000){
        $respuesa = "8% de irpf";
    }elseif($salario > 45000 && $salario < 49000){
        $respuesa = "pago 15% de irpf";
    } else{
        $respuesa = "Sos tremendo sorete";
    }

    $varHelados = "poronga";

    switch ($varHelados){
        case "frutilla" :
                $varMeGusta = "No me gusta";
            break;
        case "limon" :
            $varMeGusta = "Me encanta";
            break;
        case "naranja":
            $varMeGusta = "Esta muy bueno";
            break;
        default:
           $varMeGusta = "Me da igual";
            break;            
    }

    $condicion = true;
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            $i=0;
            while ($condicion){
                echo ("<h1> Hola me repito siempre</h1>".$i);
                $i = $i +1;   
                if ($i >= 3){
                    $condicion =  false;
                } 
            }
            for ($i=0 ; $i < 10; $i++){
                echo "el numero vale: " .$i . "<br/>";
            }
        ?>
    </body>
</html>