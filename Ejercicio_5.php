<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 5</h1>

<?php
    header ("Content-type: text/html;charset=\"utf-8\"");
    for ($i=1;$i<=10;$i++)
    {
        echo "<p>$i</P>";
    }
    echo "<p>Finaliza ciclo for</p>";

    for ($i=10;$i<=0;$i--)
    {
        echo "<p>$i</p>";
    }
    echo "<p>Finaliza ciclo for</p>";

    $familia = array("Maria","Ana","José","Pedro");

    for ($i=0;$i<=sizeof($familia);$i++)
    {
        echo "<h2>$familia[$i] número de elemento $i </h2>";
        echo "<br>";
    }

    function mostrarDatos($familia){
        $contador = 0; //Utilizar una variable para lograr un incremento de los números
        
       while ($contador < count($familia)) { //Extraemos los datos del array de uno en uno mientras haya datos
           echo ($contador+1).'- '.$familia[$contador].'<br/>'; //Mostramos el contenido del array usando el incremento de la variable
           $contador++; //Usamos la variable para ir incrementando los númros
       }  
     }
     mostrarDatos($familia);
     
    ?>
    </body>
    </html>
