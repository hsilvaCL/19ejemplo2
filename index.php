<?php
include 'operaciones.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include 'html.php'; ?>
        Texto sin programación
        <br>
        <?php
            $saludo="Mundo variable";
            echo "Hola Mundo 2";
            echo "<br>";
            echo "Hola ".$saludo;
         ?>
        <br>
        <?php
        $meses["enero"]="verano";
        $meses["febrero"]="verano";
        $meses["marzo"]="verano/otoño";
        $meses["abril"]="otoño";
        $meses["mayo"]="otoño/invierno";
        $meses["junio"]="invierno";
        $meses["julio"]="invierno";
        $meses["agosto"]="invierno";
        $meses["septiembre"]="inverno/primavera";
        $meses["octubre"]="primavera";
        $meses["noviembre"]="primavera";
        $meses["diciembre"]="primavera/verano";
        
        foreach ($meses as $mes){
            echo $mes."<br>";
            
        }
        ?>
        
        <br>
        Variables Globales $_SERVER
        <br>
        <pre>
        <?php
        /*
         * Imprime el contenido de cualquier variable
         */
        var_dump($_SERVER);
        ?>
        </pre>
    </body>
</html>
