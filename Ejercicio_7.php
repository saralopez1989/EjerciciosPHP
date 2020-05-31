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

    if ($_GET['numero']  % 2 != 0) 
        {
            for ($i = 3; $i <= $_GET['numero'] ; $i += 2) 
            {
                if ($_GET['numero']  % $i == 0) 
                {
                    echo "<br>El número ".$_GET['numero']." NO es primo";
                }
            }
        }
        else 
        {
            echo "<h2>El número ".$_GET['numero']." es primo</h2>";
        }
    
?>
<form>
    Escribe un número:
    <input name="numero" type="text" placeholder="Escribe número">
    <input type="submit" value="Comprobar">
</form>

</body>
</html>