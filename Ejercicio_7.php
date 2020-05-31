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
        echo "<br>El número ".$$_GET['numero']." NO es numerico";
    }

    if (primo($numero) == true)
    {
        echo "<br>El número ".$_GET['numero']." es primo";
    }
    else
    {
        echo "<br>El número ".$$_GET['numero']." NO es primo";
    }

    function primo($numero)
    {
    if $numero == 2 || $numero == 3 || $numero == 5 || $numero == 7) {
        return True;
    } else {
        if ($numero % 2 != 0) {
            for ($i = 3; $i <= sqrt($numero); $i += 2) {
                if ($numero % $i == 0) {
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
    <input name="numero" type="text" placeholder="Escribe número">
    <input type="submit" value="Comprobar">
</form>

</body>
</html>