<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>

<?php
    header ("Content-type: text/html;charset=\"utf-8\"");

    if (is_numeric($_GET['numero']) && $_GET['numero'] >1 && primo($_GET['numero']))
    {
        echo "<h3>".$_GET['numero'].Es un número primo"</h3>";
    }
    else
    {
        echo "<h3>"EL número no es primo."</h3>";
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
    Escribe un número:
    <input name="número" type="text" placeholder="Escribe número">
    <input type="submit" value="Comprobar">
</form>

</body>
</html>