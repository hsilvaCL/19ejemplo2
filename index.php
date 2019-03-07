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
    </head>
    <body>
        Texto sin programación
        <br>
        <?php
            $saludo="Mundo variable";
            echo "Hola Mundo 2";
            echo "Hola ".$saludo;
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
