<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>

<?php
header ("Content-type: text/html;charset=\"utf-8\"");


    if (is_numeric($num) && $num >1)
    {
        echo "<br>El número ".$num." es numerico";
    }
    else
    {
        echo "<br>El número ".$num." NO es numerico";
    }


?>
<form>
    Escribe un número:
    <input name="numero" type="text" placeholder="Escribe número">
    <input type="submit" value="Comprobar">
</form>

</body>
</html>