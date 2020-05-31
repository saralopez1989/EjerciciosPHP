<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>

<?php
    header ("Content-type: text/html;charset=\"utf-8\"");

    if (is_numeric($_GET['numero']) && $_GET['numero'] >1)
    {
        echo "<h3>".$_GET['numero'].Es un valor numérico"</h3>";
    }
    else
    {
        echo "<h3>"no es un valor numérico."</h3>";
    }

    for ($i>1; $i<=$_GET['numero']; $i++) {
        if (primo($_GET)) {
            echo "<br>El número ".$i." es primo";
        } else {
            echo "<br>El número ".$i." NO es primo";
        }
    }

function primo($_GET)
{
    if ($_GET['numero'] == 2 || $_GET['numero'] == 3 || $_GET['numero'] == 5 || $_GET['numero'] == 7) 
    {
        return True;
    } else {
        // comprobamos si es par
        if ($_GET['numero'] % 2 != 0) 
        {  // comprobamos solo por los impares
            for ($i = 3; $i <= sqrt($_GET['numero']); $i += 2)
             {
                if ($_GET['numero'] % $i == 0) {
                    return False;
                }
            }
            return True;
        }
    }
    return False;
}
?>

<form>
    Escribe un numero entre 1 y 100:
    <input name="número" type="text" placeholder="Escribe número">
    <input type="submit" value="Comprobar">
</form>

</body>
</html>