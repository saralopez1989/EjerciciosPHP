<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>

<?php
header ("Content-type: text/html;charset=\"utf-8\"");


    if (is_numeric($_GET['numero']) && $_GET['numero'] >1)
    {
        echo "<br>El número ".$_GET['numero']." es numerico";
    }
    else
    {
        echo "<br>El número ".$_GET['numero']." NO es numerico";
    }

    
    if ($_GET['numero'] == 2 || $_GET['numero']  == 3 || $_GET['numero']  == 5 || $_GET['numero']  == 7) {
        echo "<br>El número ".$_GET['numero'] ." es primo";
    } else {
        if ($_GET['numero']  % 2 != 0) {
            for ($i = 3; $i <= $_GET['numero'] ; $i += 2) {
                if ($_GET['numero']  % $i == 0) {
                    echo "<br>El número ".$_GET['numero']." NO es primo";
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
    <input name="numero" type="text" placeholder="Escribe número">
    <input type="submit" value="Comprobar">
</form>

</body>
</html>