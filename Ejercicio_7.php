<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7</h1>

<?php
header ("Content-type: text/html;charset=\"utf-8\"");

for ($i=1; $i<= $_GET[]; $i++) {

    if (is_numeric($_GET['numero']) && $_GET['numero'] >1 && primo($i))
    {
        echo "<br>El número ".$i." es primo";
    }
    else
    {
        echo "<br>El número ".$i." NO es primo";
    }

function primo($num)
{
    if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
        return True;
    } else {
        if ($num % 2 != 0) {
            for ($i = 3; $i <= sqrt($num); $i += 2) {
                if ($num % $i == 0) {
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