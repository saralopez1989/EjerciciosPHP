<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>

<?php
header ("Content-type: text/html;charset=\"utf-8\"");

    
    if(is_numeric($_GET['numero']) && $_GET['numero'] >1)
    {
        $cont=0;
        for($i=1;$i<=$_GET['numero'];$i++)
        {  
          if($_GET['numero']%$i==0)$cont++;
        }
        if($cont==2)
        {
            echo "<h3>el numero ".$_GET['numero']." es primo.</h3>";
        }
        else
        {
          echo "<h3>el numero ".$_GET['numero']." no es primo.</h3>";
        }
    }
    else
    {
        echo "<h3>El valor ".$_GET['numero']." No es numerico</h3>";
    }
    }
    
?>
<form>
    Escribe un número:
    <input name="numero" type="text" placeholder="Escribe número">
    <input type="submit" value="Comprobar">
</form>

</body>
</html>