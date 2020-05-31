<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>

<?php
header ("Content-type: text/html;charset=\"utf-8\"");

for ($i=1; $i<= $_GET[]; $i++) {

    if (is_numeric($_GET['numero']) && $_GET['numero'] >1)
    {
        echo "<br>El número ".$i." es numerico";
    }
    else
    {
        echo "<br>El número ".$i." NO es numerico";
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