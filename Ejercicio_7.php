<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>

<?php
header ("Content-type: text/html;charset=\"utf-8\"");

    if (is_numeric($_GET['numero']) && $_GET['numero'] >1)
    {
        echo "<h3>El valor ".$_GET['numero']." es numerico</h3>";
    }
    else
    {
        echo "<h3>El valor ".$_GET['numero']." No es numerico</h3>";
    }
    
    $i = 0;
    for ($i = 2; $i <= $_GET['numero'] / 2; $i++) 
    {
        if ($_GET['numero'] % $i == 0 || $_GET['numero'] < 2 ) 
        {
            echo "<h2>El número ".$_GET['numero']."No es primo</h2>";
        }
        else
        }
            echo "<h2>El número ".$_GET['numero']." es primo</h2>";
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